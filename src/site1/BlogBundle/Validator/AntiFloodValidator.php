<?php
// src/site1/BlogBundle/Validator/AntiFloodValidator.php

namespace site1\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

use Symfony\Component\HttpFoundation\Request;

class AntiFloodValidator extends ConstraintValidator
{
  private $request;
  private $em;

  // Les arguments déclarés dans la définition du service arrivent au constructeur
  // On doit les enregistrer dans l'objet pour pouvoir s'en resservir dans la méthode validate()
  public function __construct(Request $request, EntityManager $em)
  {
    $this->request = $request;
    $this->em      = $em;
  }

  public function validate($value, Constraint $constraint)
  {

    $ip = $this->request->server->get('REMOTE_ADDR');

    // $isFlood = $this->em->getRepository('SdzBlogBundle:Commentaire')
    //                    ->isFlood($ip, 15); // Bien entendu, il faudrait écrire cette méthode isFlood, c'est pour l'exemple

    // Pour l'instant, on considère comme flood tout message de moins de 3 caractères
    if (strlen($value) < 3) {
      // C'est cette ligne qui déclenche l'erreur pour le formulaire, avec en argument le message
      $this->context->addViolation($constraint->message);

    }
  }
}
