{include file="header.tpl"}
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>{$titulo_s}</li>
        </ol>
        <h2>{$titulo_s}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
       
                <form action="editar/billetera/{$billeteraedit_s->id}" method="post">
                    <div class="form-group">
                        <label for="title">Nombre de Billetera</label>
                        <input class="form-control" id="title" name="nombre" value="{$billeteraedit_s->nombre}">
                        <small id="emailHelp" class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Comisión Única</label>
                        <input class="form-control" id="comision_unica" name="comision_unica" value="{$billeteraedit_s->comision_unica} ">
                    </div>
                    <div class="form-group">
                        <label for="priority">Comisión Porcentual</label>
                        <input class="form-control" id="comision_porcentual" name="comision_porcentual" value="{$billeteraedit_s->comision_porcentual}">
                        </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                    </form>

</div>
    </section>

  </main>



{include file="footer.tpl"}
