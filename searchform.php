<div class="sidebar-widget search">
  <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="search-form form-group">
    <input type="text" placeholder="поиск" value="<?php echo get_search_query() ?>" required name="s" id="s" class="form-control" />
    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
  </form>
</div>
