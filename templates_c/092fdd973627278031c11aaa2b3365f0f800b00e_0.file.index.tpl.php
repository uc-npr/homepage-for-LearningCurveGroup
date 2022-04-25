<?php
/* Smarty version 4.1.0, created on 2022-04-25 11:47:19
  from 'D:\Website\homepage for LearningCurveGroup\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62666e27648002_92492415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092fdd973627278031c11aaa2b3365f0f800b00e' => 
    array (
      0 => 'D:\\Website\\homepage for LearningCurveGroup\\templates\\index.tpl',
      1 => 1650880035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62666e27648002_92492415 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uCertify</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .hover-shadow:hover {
            transition: 0.2s linear;
            box-shadow: 0px 0px 10px #ddd !important;
            transform: translateY(-3px);
        }
    </style>
</head>

<body>
    <div class="container-fluid container-lg pt-5 pb-5">
        <ul class="nav nav-pills justify-content-center" id="productcategory" role="tablist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productcategory']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li class="nav-item lead col-6" role="presentation">
                <button class="nav-link w-100 h-100 fs-2 py-4" id="<?php echo $_smarty_tpl->tpl_vars['category']->value["code"];?>
-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $_smarty_tpl->tpl_vars['category']->value["code"];?>
" aria-controls="<?php echo $_smarty_tpl->tpl_vars['category']->value["code"];?>
" >
                    <b><?php echo $_smarty_tpl->tpl_vars['category']->value["name"];?>
</b>
                </button>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php $_smarty_tpl->_assignInScope('i', 1);?>
        <div class="tab-content bg-white" id="productlist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productcategory']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <div class="tab-pane fade" id="<?php echo $_smarty_tpl->tpl_vars['category']->value["code"];?>
" role="tabpanel" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['category']->value["code"];?>
-tab">
                        <div class="mt-4 mt-md-5 mb-4 mb-md-0 p-2 border border-success border-4 border-top-0 border-bottom-0 border-end-0">
                            <h3 class="fs-4"><?php echo $_smarty_tpl->tpl_vars['category']->value["name"];?>
</h3>
                            <p class="text-secondary small"><?php echo $_smarty_tpl->tpl_vars['category']->value["description"];?>
</p>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productlist']->value[$_smarty_tpl->tpl_vars['category']->value["code"]], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <?php if (!(1 & $_smarty_tpl->tpl_vars['i']->value)) {?>
                                <div class="container-fluid container-lg my-2 my-md-5">
                                        <div class="row px-4 py-5 my-3 my-md-4 bg-light justify-content-center ">
                                            <h2 class="text-center text-dark"><?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
</h2>
                                            <p class="text-center fs-4 lead mt-2 col-12 col-sm-8 col-md-7 d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate maiores nisi cupiditate incidunt doloribus!</p>
                                        </div>
                                        <div class="row p=0 flex-column-reverse flex-md-row">
                                            <div class="col-12 col-md-6 p-0 px-md-3 px-lg-5 d-flex flex-column justify-content-evenly">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['course'], 'course');
$_smarty_tpl->tpl_vars['course']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->do_else = false;
?>
                                                <a class="text-decoration-none mb-2 mt-2" href="#">
                                                        <div class="alert alert-primary p-0 m-0 border-0 border-primary border-bottom-0 border-top-0 border-end-0 rounded-2 d-flex align-items-center justify-content-between" role="alert">
                                                            <img class="img-fluid border-0 rounded-end" src="./images/deskboot.jpg" style="height: 70px;">
                                                            <p class="m-3 my-0 text-truncate"><?php echo $_smarty_tpl->tpl_vars['course']->value;?>
</p>
                                                        </div>
                                                    </a>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                            <div class="col-12 col-md-6 text-center text-dark p-0 mb-2 mb-md-0">
                                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['product']->value["image"];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
" height="auto" width="100%">
                                            </div>
                                        </div>
                                </div>
                            <?php } else { ?>
                                <div class="container-fluid container-lg my-2 my-md-5">
                                        <div class="row px-4 py-5 my-3 my-md-3 bg-light justify-content-center ">
                                            <h2 class="text-center text-dark"><?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
</h2>
                                            <p class="text-center fs-4 lead mt-2 col-12 col-sm-8 col-md-7 d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate maiores nisi cupiditate incidunt doloribus!</p>
                                        </div>
                                        <div class="row p=0">
                                            <div class="col-12 col-md-6 text-center text-dark p-0 mb-2 mb-md-0">
                                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['product']->value["image"];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
" style="width:100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <div class="col-12 col-md-6 p-0 px-md-3 px-lg-5 d-flex flex-column justify-content-evenly">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['course'], 'course');
$_smarty_tpl->tpl_vars['course']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->do_else = false;
?>
                                                    <a class="text-decoration-none mb-2 mt-2" href="#">
                                                        <div class="alert alert-primary p-0 m-0 border-0 border-primary border-bottom-0 border-top-0 border-end-0 rounded-2 d-flex align-items-center justify-content-between" role="alert">
                                                            <p class="m-3 my-0 text-truncate"><?php echo $_smarty_tpl->tpl_vars['course']->value;?>
</p>
                                                            <img class="img-fluid border-0 rounded-end" src="./images/deskboot.jpg" style="height: 70px;">
                                                        </div>
                                                    </a>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                </div>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>


    <div class="row px-4 py-5 my-4 bg-light justify-content-center d-none">
        <h2 class="text-center text-dark"><?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
</h2>
        <p class="text-center fs-4 lead mt-2 col-12 col-sm-8 col-md-7 d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate maiores nisi cupiditate incidunt doloribus!</p>
    </div>


    <!-- JavaScript -->
    <?php echo '<script'; ?>
>
        document.getElementById("bootcamp-tab").classList.add("active");
        document.getElementById("bootcamp").classList.add("show");
        document.getElementById("bootcamp").classList.add("active");
    <?php echo '</script'; ?>
>
    <!-- Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
        
</body>
</html><?php }
}
