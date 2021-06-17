<?php

// Interface qui définit les requêtes disponibles pour les controllers
interface ControllerInterface
{

    // Récupère toutes les données disponibles sur l'endpoint considéré
    public function get();

    // Récupère une donnée par son ID sur l'endpoint considéré
    public function getById(int $number);

}