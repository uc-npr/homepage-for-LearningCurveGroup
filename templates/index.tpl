<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uCertify</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid container-lg pt-5 pb-5">
        <ul class="nav nav-pills justify-content-center" id="productcategory" role="tablist">
        {foreach $productcategory as $category}
            <li class="nav-item lead col-6" role="presentation">
                <button class="nav-link w-100 h-100 fs-2 py-4" id="{$category["code"]}-tab" data-bs-toggle="tab" data-bs-target="#{$category["code"]}" aria-controls="{$category["code"]}" >
                    <b>{$category["name"]}</b>
                </button>
            </li>
        {/foreach}
        </ul>
        {assign var="i" value=1}
        <div class="tab-content bg-white" id="productlist">
            {foreach $productcategory as $category}
                <div class="tab-pane fade" id="{$category["code"]}" role="tabpanel" aria-labelledby="{$category["code"]}-tab">
                        <div class="mt-4 mt-md-5 mb-4 mb-md-0 p-2 border border-success border-4 border-top-0 border-bottom-0 border-end-0">
                            <h3 class="fs-4">{$category["name"]}</h3>
                            <p class="text-secondary small">{$category["description"]}</p>
                        </div>
                        {$i = 1}
                        {foreach $productlist[$category["code"]] as $product}
                            {if $i is even}
                                <div class="container-fluid container-lg my-2 my-md-5">
                                        <div class="row px-4 py-5 my-3 my-md-4 bg-light justify-content-center ">
                                            <h2 class="text-center text-dark">{$product["name"]}</h2>
                                            <p class="text-center fs-4 lead mt-2 col-12 col-sm-8 col-md-7 d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate maiores nisi cupiditate incidunt doloribus!</p>
                                        </div>
                                        <div class="row p=0 flex-column-reverse flex-md-row">
                                            <div class="col-12 col-md-6 p-0 px-md-3 px-lg-5 d-flex flex-column justify-content-evenly">
                                            {foreach $product['course'] as $course}
                                                <a class="text-decoration-none mb-2 mt-2" href="#">
                                                        <div class="alert alert-primary p-0 m-0 border-0 border-primary border-bottom-0 border-top-0 border-end-0 rounded-2 d-flex align-items-center justify-content-between" role="alert">
                                                            <img class="img-fluid border-0 rounded-end" src="./images/deskboot.jpg" style="height: 70px;">
                                                            <p class="m-3 my-0 text-truncate">{$course}</p>
                                                        </div>
                                                    </a>
                                            {/foreach}
                                            </div>
                                            <div class="col-12 col-md-6 text-center text-dark p-0 mb-2 mb-md-0">
                                                <img src="./images/{$product["image"]}" alt="{$product["name"]}" height="auto" width="100%">
                                            </div>
                                        </div>
                                </div>
                            {else}
                                <div class="container-fluid container-lg my-2 my-md-5">
                                        <div class="row px-4 py-5 my-3 my-md-3 bg-light justify-content-center ">
                                            <h2 class="text-center text-dark">{$product["name"]}</h2>
                                            <p class="text-center fs-4 lead mt-2 col-12 col-sm-8 col-md-7 d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate maiores nisi cupiditate incidunt doloribus!</p>
                                        </div>
                                        <div class="row p=0">
                                            <div class="col-12 col-md-6 text-center text-dark p-0 mb-2 mb-md-0">
                                                <img src="./images/{$product["image"]}" alt="{$product["name"]}" style="width:100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <div class="col-12 col-md-6 p-0 px-md-3 px-lg-5 d-flex flex-column justify-content-evenly">
                                            {foreach $product['course'] as $course}
                                                    <a class="text-decoration-none mb-2 mt-2" href="#">
                                                        <div class="alert alert-primary p-0 m-0 border-0 border-primary border-bottom-0 border-top-0 border-end-0 rounded-2 d-flex align-items-center justify-content-between" role="alert">
                                                            <p class="m-3 my-0 text-truncate">{$course}</p>
                                                            <img class="img-fluid border-0 rounded-end" src="./images/deskboot.jpg" style="height: 70px;">
                                                        </div>
                                                    </a>
                                            {/foreach}
                                            </div>
                                        </div>
                                </div>
                            {/if}
                            {$i=$i+1}
                        {/foreach}
                </div>    
            {/foreach}
        </div>
    </div>


    <div class="row px-4 py-5 my-4 bg-light justify-content-center d-none">
        <h2 class="text-center text-dark">{$product["name"]}</h2>
        <p class="text-center fs-4 lead mt-2 col-12 col-sm-8 col-md-7 d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate maiores nisi cupiditate incidunt doloribus!</p>
    </div>


    <!-- JavaScript -->
    <script>
        document.getElementById("bootcamp-tab").classList.add("active");
        document.getElementById("bootcamp").classList.add("show");
        document.getElementById("bootcamp").classList.add("active");
    </script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        
</body>
</html>