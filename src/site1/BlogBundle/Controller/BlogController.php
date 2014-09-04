<?php

namespace site1\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use site1\BlogBundle\Entity\Article;
use site1\BlogBundle\Entity\ArticleCompetence;
use site1\BlogBundle\Entity\Commentaire;
use site1\BlogBundle\Entity\Image;
use site1\BlogBundle\Form\ArticleType;

class BlogController extends Controller
{

  public function indexAction($page)
  {
    $id = $page;

    // Si on veut faire une redirection :
      //$url = $this->generateUrl('blog_voir', array('id' => $id));
      // return $this->redirect($url);

    // // Récupération du service
    // $mailer = $this->get('mailer');
    // $templating = $this->get('templating');
    // //Création du contenu
    // $contenu = $templating->render('BlogBundle:Blog:index.html.twig', array('article_id' =>$id));
    // // Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
    // $message = \Swift_Message::newInstance()
    //   ->setSubject('Hello zéro !')
    //   ->setFrom('tutorial@symfony2.com')
    //   ->setTo('victor.baconneau@gmail.com')
    //   ->setBody($contenu, 'text/html');
    //   // 'Coucou, voici un email que vous venez de recevoir ! il était une fois à Compiegne @etu <kiki>é"""ù%#'
    // // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
    // $mailer->send($message);

    // // Récupération du service
    // $session = $this->get('session');
    // // On récupère le contenu de la variable user_id
    // $user_id = $session->get('user_id');
    // // On définit une nouvelle valeur pour cette variable user_id
    // $session->set('user_id', 91);

    $antispam = $this->container->get('site1_blog.antispam');
    $text2 = "http://foundation.zurb.com/docs/components/topbar.html
    http://foundation.zurb.com/docs/components/topbar.html
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum voluptas, perferendis, aperiam natus fuga, numquam modi provident velit eaque suscipit similique tenetur cum ratione, deleniti nihil dolorum doloremque. Necessitatibus, repellendus?";
    if ($antispam->isSpam($text2)) {
      throw new \Exception('Votre message a été détecté comme spam !');
    }

    if ($page < 1) {
      // On déclenche une exception NotFoundHttpException
      // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $articles = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Article')->getArticles();

    // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
    return $this->render('BlogBundle:Blog:index.html.twig', array(
      'articles' => $articles
    ));
  }

//****************************************************************************************

  public function voirAction($id)
  {
  // On récupère l'EntityManager
  $em = $this->getDoctrine()->getManager();

  // On récupère l'entité correspondant à l'id $id
  $article = $em->getRepository('BlogBundle:Article')->getArticleAvecCommentaire($id);

  // $article est donc une instance de site1\BlogBundle\Entity\Article
  // Ou null si aucun article n'a été trouvé avec l'id $id
  if ($article === null) {
    throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
  }

  $liste_articleCompetence = $em->getRepository('BlogBundle:ArticleCompetence')
                                ->findByArticle($article->getId());

    return $this->render('BlogBundle:Blog:voir.html.twig', array(
      'article'  => $article,
      'liste_articleCompetence' => $liste_articleCompetence,
    ));
  }

//****************************************************************************************

  public function modifierAction($id)
  {
        // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('BlogBundle:Article')->find($id);

    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }

    //On test si on est en post => l'article a été modifié.
    $request = $this->get('request');

    $form = $this->createForm(new ArticleType(), $article);
    $form->remove('date');

    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
      $form->bind($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Article bien modifié !');
        // On redirige vers la page de visualisation de l'article nouvellement créé
        return $this->redirect( $this->generateUrl('blog_voir', array('id' => $article->getId())) );
      }

    }

    return $this->render('BlogBundle:Blog:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));

  }

//****************************************************************************************


  public function voirSlugAction($slug, $annee, $_format)
  {
    // Ici le contenu de la méthode
    return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$_format.".");
  }

//****************************************************************************************


public function ajouterAction()
  {

    $article = new Article();
    $form = $this->createForm(new ArticleType(), $article);

    // Création de l'entité Image
    // $image = new Image();
    // $image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
    // $image->setAlt('Logo Symfony2');

    // $article->setImage($image);

    // // Création d'un premier commentaire
    // $commentaire1 = new Commentaire();
    // $commentaire1->setAuteur('winzou');
    // $commentaire1->setContenu('On veut les photos !');

    // // Création d'un deuxième commentaire, par exemple
    // $commentaire2 = new Commentaire();
    // $commentaire2->setAuteur('Choupy');
    // $commentaire2->setContenu('Les photos arrivent !');

    // // On lie les commentaires à l'article
    // $commentaire1->setArticle($article);
    // $commentaire2->setArticle($article);

    // // On récupère l'EntityManager
    // $em = $this->getDoctrine()->getManager();

    // // Étape 1 : On « persiste » l'entité
    // $em->persist($article);
    // $em->persist($commentaire1);
    // $em->persist($commentaire2);

    // // Étape 2 : On « flush » tout ce qui a été persisté avant
    // // $em->flush();

    // // Les compétences existent déjà, on les récupère depuis la bdd
    // $liste_competences = $em->getRepository('BlogBundle:Competence')
    //                         ->findAll(); // Pour l'exemple, notre Article contient toutes les Competences

    // // Pour chaque compétence
    // foreach ($liste_competences as $i => $competence) {
    //   // On crée une nouvelle « relation entre 1 article et 1 compétence »
    //   $articleCompetence[$i] = new ArticleCompetence();

    //   // On la lie à l'article, qui est ici toujours le même
    //   $articleCompetence[$i]->setArticle($article);
    //   // On la lie à la compétence, qui change ici dans la boucle foreach
    //   $articleCompetence[$i]->setCompetence($competence);

    //   // Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
    //   $articleCompetence[$i]->setNiveau('Expert');

    //   // Et bien sûr, on persiste cette entité de relation, propriétaire des deux autres relations
    //   $em->persist($articleCompetence[$i]);
    // }

    // // On déclenche l'enregistrement
    // $em->flush();

    // On récupère la requête
    $request = $this->get('request');

    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
      $form->bind($request);

      // On vérifie que les valeurs entrées sont correctes
      if ($form->isValid()) {

        $validator = $this->get('validator');
        $liste_erreurs = $validator->validate($article);

        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré !');
        // Le « flashBag » est ce qui contient les messages flash dans la session
        // Il peut bien sûr contenir plusieurs messages :
        //  $this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');
        // On redirige vers la page de visualisation de l'article nouvellement créé
        return $this->redirect( $this->generateUrl('blog_voir', array('id' => $article->getId())) );
      }
    }

    return $this->render('BlogBundle:Blog:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  }

//*****************************************************************************************

  public function supprimerAction(Article $article)
  {
    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'article contre cette faille
    $form = $this->createFormBuilder()->getForm();

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) {
        // On supprime l'article
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');

        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('blog_accueil'));
      }
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('BlogBundle:Blog:supprimer.html.twig', array(
      'article' => $article,
      'form'    => $form->createView()
    ));
  }

//****************************************************************************************

  public function menuAction()
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    $liste = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Article')->getDerniers(3);

    return $this->render('BlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }

//****************************************************************************************

  public function sideMenuAction($nbr)
  {

    $liste = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('BlogBundle:Article')
                  ->findBy(
                    array(),          // Pas de critère
                    array('id' => 'DESC'), // On trie par date décroissante
                    $nbr,         // On sélectionne $nombre articles
                    0                // À partir du premier
                  );

    //$liste = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Article')->getDerniers();
    return $this->render('BlogBundle:Blog:sideMenu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }

//   public function testAction()
//   {
//     $liste_articles = $this->getDoctrine()
//                          ->getManager()
//                          ->getRepository('SdzBlogBundle:Article')
//                          ->myFindAll();

//     // Reste de la méthode du contrôleur
// }


}
