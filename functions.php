<?php

function enregistrerFichierEnvoye(array $infoFichier): string
{
    $timestamp = strval(time());
    $extension = pathinfo(basename($infoFichier["name"]), PATHINFO_EXTENSION);
    $nomDuFichier = 'produit_' . $timestamp . '.' . $extension;path

    if (file_exists($dossierStockage) === false)
    {
        mkdir($dossierStockage);
    }

    move_uploaded_file($infoFichier["tmp_name"], $dossierStockage . $nomDuFichier);
    return '/uploads/' . $nomDuFichier;
}
// creer une fonction onVaRediriger qui a comme vaiables une chaine de caractères et path //
function onVaRediriger(string $path)
{
    header('LOCATION: /tp_produit/router.php' . $path);
    die();
}