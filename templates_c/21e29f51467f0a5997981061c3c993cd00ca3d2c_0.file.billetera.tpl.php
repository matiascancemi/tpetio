<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 05:43:02
  from 'C:\xampp\htdocs\TPE_Web2\templates\billetera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a9646c84b92_64319360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21e29f51467f0a5997981061c3c993cd00ca3d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\billetera.tpl',
      1 => 1601868996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7a9646c84b92_64319360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</li>
        </ol>
        <h2><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billetera_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
?>
              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 pricing" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['billetera']->value->nombre, 'UTF-8');?>
</h4>
                    <h6>Comisión Unica:<?php echo $_smarty_tpl->tpl_vars['billetera']->value->comision_unica;?>
 </h6>
                    <h6>Comisión Porcentual: <?php echo $_smarty_tpl->tpl_vars['billetera']->value->comision_porcentual;?>
</h6>
                    <a href="<?php echo BASE_URL;?>
eliminar/billetera/<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
" class="buy-btn">Borrar</a> 
             </div>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </div>
    </section>

  </main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
