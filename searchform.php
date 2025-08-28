<form role="search" method="get" class="search-form searchbox sbx-custom" action="<?php echo esc_url(home_url('/')); ?>">
    <div role="search" class="sbx-google__wrapper" style="height:35px;">
        <input type="search" class="search-field sbx-custom__input" placeholder="Search E-Pustakalaya..." value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
        <button type="submit" class="search-submit sbx-custom__submit">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
