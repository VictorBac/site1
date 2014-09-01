<?php

namespace site1\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="site1\BlogBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Article
{

    public function __construct()
    {
        $this->date = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
        $this->publication = true;
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;


    /**
    * @ORM\OneToMany(targetEntity="site1\BlogBundle\Entity\Commentaire", mappedBy="article")
    */
    private $commentaires; // Ici commentaires prend un « s », car un article a plusieurs commentaires !

    /**
     * @var integer
     *
     * @ORM\Column(name="nbCommentaire", type="integer", nullable=true)
     */
    private $nbCommentaire;


    /**
     * @ORM\ManyToMany(targetEntity="site1\BlogBundle\Entity\Categorie", cascade={"persist"})
     */
    private $categories;

    /**
     * @ORM\OneToOne(targetEntity="site1\BlogBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdition", type="datetime", nullable=true))
     */
    private $dateEdition;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
    * @ORM\Column(name="publication", type="boolean")
    */
    private $publication;

    /**
    * @ORM\PreUpdate
    */
    public function updateDate()
    {
        $this->setDateEdition(new \Datetime());
    }



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param \site1\BlogBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\site1\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \site1\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add categories
     *
     * @param \site1\BlogBundle\Entity\Categorie $categories
     * @return Article
     */
    public function addCategory(\site1\BlogBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \site1\BlogBundle\Entity\Categorie $categories
     */
    public function removeCategory(\site1\BlogBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add commentaires
     *
     * @param \site1\BlogBundle\Entity\Commentaire $commentaires
     * @return Article
     */
    public function addCommentaire(\site1\BlogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;
        $commentaires->setArticle($this); // On ajoute ceci
        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \site1\BlogBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\site1\BlogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Article
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime 
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set nbCommentaire
     *
     * @param integer $nbCommentaire
     * @return Article
     */
    public function setNbCommentaire($nbCommentaire)
    {
        $this->nbCommentaire = $nbCommentaire;

        return $this;
    }

    /**
     * Get nbCommentaire
     *
     * @return integer 
     */
    public function getNbCommentaire()
    {
        return $this->nbCommentaire;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
