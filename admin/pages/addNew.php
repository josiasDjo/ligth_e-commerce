<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <title>Document</title>
</head>
<body>
    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarAd.php'; ?>

    <div class="container-addArt">
        <div class="part-bg">
            <!-- <p>Lorem ipsum dolor sit amet.</p> -->
            <!-- <img src="../../src/images/warehouse.jpg" alt=""> -->
        </div>
        <div class="part-Add">
            <div class="rendu">
                <div class="container-add">
                    <div class="sub-image">
                        <img src="<?php echo ""; ?>" alt="">
                    </div>
                    <h5> <?php echo ""; ?>dfdg </h5>
                    <label><?php echo "" ?> fsf</label>
                </div>
            </div>

            <div class="ajouter">
                <div class="">
                    <form action="" method="post">
                        <input type="file" name="image" class="shoose">
                        <label for="nom">Name</label>
                        <input type="text" name="nom" id="">
                        <label for="prix">Price</label>
                        <input type="number" name="prix" id="">
                        <select name="" id="">
                            <option value="vide"></option>
                            <option value="appleWatch">Apple Watch</option>
                            <option value="phone">Phone</option>
                            <option value="airPod">Air pod</option>
                            <option value="laptop">Laptop</option>
                        </select>
                        <label for="description">Description</label>
                        <textarea name="description" id="" cols="30" rows="4"></textarea>
                        <!-- <input type="text" name="description" id="" > -->
                        <input type="submit" value="VALIDATE" class="valide">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>