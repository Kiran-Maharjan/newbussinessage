<!--
<!?php $page=TCG\Voyager\Models\Page::first(); ?>
@can('browse',$page)
  you can browse to page.
@endcan

@can('edit',$page)
  you can edit to page.

@else
  you do not have access to edit page
@endcan

-->

<?php $browsePages=Voyager::can('browse_pages') ?>
@if($browsePages)
  you can browse page
@else
  you cannot browse page
@endif
