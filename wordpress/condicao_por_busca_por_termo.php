<!-- Se você estiver buscando renderizar o nome de uma categoria de uma taxonomia customizada ou colocar o termo pesquisado/ texto genérico dentro de uma página de busca -->

<div class="row">
  <!-- Se for página de resultado de busca -->
  <?php if(is_search()) : ?>
    <h1 class="entry-title">Você buscou por:
      <?php
        // Recebe a query numa variável
        $QueryPostType = get_search_query();

        // Se a query não estiver vazia, mostre o valor
        if(!empty($QueryPostType)){
            echo $QueryPostType;
        }else{
          // Senão mostre esse termo genérico
          echo 'Todos os produtos';
        }
      ?>
    </h1>
  <?php else : ?>
  <!-- Se for qualquer outra página -->
    <h1 class="entry-title">
      <?php global $post;
        // Recebe o valor dessa custom taxonomy
        $terms = get_the_terms($post->id, 'categoria-produtos');
        $nome_taxonomy = $terms[0]->name;
        echo $nome_taxonomy;
      ?>
    </h1>
  <?php endif; ?>
</div>