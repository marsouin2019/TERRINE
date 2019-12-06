<?php
include("autoload.php");

// creation objet personne et instanciation fonctions

$personne = new Personne($mysqli);
$personne->all_personnes();
print_r($test);
?>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Table with hover</h5>
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Civilité</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Adresse</th>
                                                <th>Complémentaire</th>
                                                <th>Code postal</th>
                                                <th>Ville</th>
                                                <th>Téléphone</th>
                                                <th>Login</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Material</th>
      <th>Quantity</th>
      <th>Unit price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
      <td>25</td>
      <td>$2.90</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
      <td>50</td>
      <td>$1.25</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
      <td>10</td>
      <td>$2.35</td>
    </tr>
  </tbody>
</table>


                            