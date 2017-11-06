<?php
/**
 * Created by PhpStorm.
 * User: alix.devynck
 * Date: 06/11/17
 * Time: 16:02
 *
 */class Etudiant
{
    /**
     * @var int
     * @Id()
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;
    /**
     * @var string
     *
     * @Column(type="string", length=40)
     */
    protected $nom;
    /**
     * @var string
     *
     * @Column(type="string", length=40)
     */
    protected $prenom;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getGithub()
    {
        return $this->Github;
    }

    /**
     * @param string $github
     */
    public function setGithub($github)
    {
        $this->discord = $github;
    }
    /**
     * @var string
     *
     * @Column(type="string", length=10)
     */

    protected $Github;

}
