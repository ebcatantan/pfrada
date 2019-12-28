<?= view('App\Views\theme\header') ?>
  <h1 id="page-title"><?= $function_title ?></h1>
  <?php echo view($viewName); ?>
<?= view('App\Views\theme\footer') ?>
<?= view('App\Views\theme\notification') ?>