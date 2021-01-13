<?php
$mois= stand(1,12);
$annee= stand(1,2021);
$nbrejours= stand(1,31);
if ($mois==2) && ($annee==2020);{
echo "nbrejours est 29";
return true;
}
if ($mois==2) && ($annee==2021);{
    echo "nbrejours est 28";
    }
    return true;
    if ($mois==12) && ($annee==2020);{
        echo "nbrejours est 31";
        }
        return true;
        if ($mois==4) || ($annee==2021);{
            echo "nbrejours est 30";
            }
            return true;
?>