<?php

define('TITLE', "Home");
include '../assets/layouts/header.php';
check_verified();

?>


<main role="main" class="container">

    <div class="row">
        <div class="col-sm-3">

            <?php include('../TI-panel/includes/sidebar.php'); ?>

        </div>
        <div class="col-sm-9">

            <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-purple rounded box-shadow">
                <img class="mr-3" src="../assets/images/logonotext.png" alt="" width="58" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Transport Inspector</h6>
                    <small>[Development in Progress]</small>
                </div>
            </div>
            <section id="live-bus">

                <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-purple rounded box-shadow">
                    <img class="mr-3" src="../assets/images/logonotext.png" alt="" width="58" height="48">
                    <div class="lh-100">
                        <h6 class="mb-0 text-white lh-100">Transport Inspector</h6>
                        <small>[live bus Development in Progress]</small>
                    </div>
                </div>





            </section>



            <section id="Schedule">

                <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-purple rounded box-shadow">
                    <img class="mr-3" src="../assets/images/logonotext.png" alt="" width="58" height="48">
                    <div class="lh-100">
                        <h6 class="mb-0 text-white lh-100">Transport Inspector</h6>
                        <small>[Schdule Development in Progress]</small>
                    </div>
                </div>





            </section>
            <section id="News">

                <?php include("includes/annoucement.php");?>





            </section>



        </div>

    </div>
</main>




<?php

include '../assets/layouts/footer.php'

    ?>