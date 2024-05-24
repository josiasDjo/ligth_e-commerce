<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'head.php' ; ?>
<body>
    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarUti.php'; ?>

    <div class="container-explore">
        <h2>OUR PRODUCTS</h2>
        <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navEplore.php'; ?>

        <div class="container">

            <div class="panelCont" id="tab1">
                <?php
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'phone.php';
                ?>
            </div>
            <div class="panelCont" id="tab2">
                <?php
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'watch.php';
                ?>
            </div>
            <div class="panelCont" id="tab3">
                <?php
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'airpod.php';
                ?>
            </div>
            <div class="panelCont" id="tab4">
                <?php
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'laptop.php';
                ?>
            </div>


        </div>
    </div>

    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'footer.php' ?>
    <script src="javascript.js" defer ></script>

</body>
</html>