@include("include/header")
    <section class='progressSection container-md mt-5 mb-5 col-md-8 offset-md-2 rounded' id='progress_certif'>
        <h2 class="text-center pt-5"><ins>Mes progress</ins></h2>
            <section class="text-center mt-5 mb-5 pb-5">
                <label for='HTMLs' class="text-center">HTML :<progress min="0" max="100" value="100" id='HTMLs' class="progress-bar bg-info"></progress></label><br>
                <label for='CSS3' class="text-center">CSS3 :<progress min="0" max="100" value="100" id='CSS3' class=" progress-bar bg-info"></progress></label><br>
                <label for='PHP' class="text-center">PHP :<progress min="0" max="100" value="100" id='PHP' class="progress-bar bg-info"></progress></label><br>
                <label for='Js' class="text-center">JavaScript :<progress min="0" max="100" value="100" id='Js' class=" progress-bar bg-info"></progress></label><br>
    </section>
    <section class="text-center flex-column" id="bgred">
            <h2><span><ins>Mes heures d'apprentissages</ins></span></h2>
            <table border="2" class="text-center table table-active mt-4">
                <tr>
                    <th class="bg-primary">Jours</th>
                    <th class="bg-info">lun(présentiel)</th>
                    <th class="bg-warning">mar(présentiel)</th>
                    <th class="bg-info">mer(remote)</th>
                    <th class="bg-warning">jeu(remote)</th>
                    <th class="bg-info">ven(remote)</th>
                </tr>
                <tr>
                    <td class="bg-primary"><strong>heure/jour</strong></td>
                    <td class="bg-info">8h</td>
                    <td class="bg-warning">8h</td>
                    <td class="bg-info">8h</td>
                    <td class="bg-warning">8h</td>
                    <td class="bg-info">8h</td>
                </tr>
            </table>
        </section>




 @include("include/footer")