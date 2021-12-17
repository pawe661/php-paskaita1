<?php
     if( isset($_GET['status']) AND $_GET['status'] == 1) :
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo 'Prekės sėkmingai pridėtos'; ?>
            </div>
        <?php endif; ?>

        <?php
            if( isset($_GET['status']) AND $_GET['status'] == 2) :
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo 'Neužpildyti formos laukeliai'; ?>
            </div>
        <?php endif; ?>

        <?php
            if( isset($_GET['status']) AND $_GET['status'] == 3) :
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo 'Prekė sėkmingai ištrinta'; ?>
            </div>
        <?php endif; ?>

        <?php
            if( isset($_GET['status']) AND $_GET['status'] == 4) :
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo 'Įvyko klaida'; ?>
            </div>
        <?php endif; ?>

        <?php
            if( isset($_GET['status']) AND $_GET['status'] == 5) :
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo 'Prekė sėkmingai iššsaugota'; ?>
            </div>
        <?php endif; ?>

 
            
