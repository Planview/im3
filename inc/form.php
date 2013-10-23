<?php 
/**
 * This is the form to display to users that have not yet completed it
 *
 * @since 0.0.0
 * @version 0.0.0
 * @package IM3
*/


include(IM3_ROOT_DIR . "inc/views/header.php");
?>

      <!-- Example row of columns -->
      <div class="row js-webapp">
      	<form id="WEBForm" name="WEBForm" class="col-md-12" action="<?php echo IM3_ROOT_URI; ?>inc/form-processing-im3.php" method="post">
          <section id="intro" class="tab" data-tab-number="0" data-tab-enabled="true">
            <?php include(IM3_ROOT_DIR . 'inc/views/tabs/intro.php'); ?>
          </section>

          <fieldset id="people" class="tab" data-tab-number="1" data-tab-enabled="false" style="display: none;">
            <?php include(IM3_ROOT_DIR . 'inc/views/tabs/people.php'); ?>
          </fieldset>

          <fieldset id="processes" class="tab" data-tab-number="2" data-tab-enabled="false" style="display: none;">
            <?php include(IM3_ROOT_DIR . 'inc/views/tabs/processes.php'); ?>
          </fieldset>

          <fieldset id="tools" class="tab" data-tab-number="3" data-tab-enabled="false" style="display: none;">
            <?php include(IM3_ROOT_DIR . 'inc/views/tabs/tools.php'); ?>
          </fieldset>

          <fieldset id="overall" class="tab" data-tab-number="4" data-tab-enabled="false" style="display: none;">
            <?php include(IM3_ROOT_DIR . 'inc/views/tabs/overall.php'); ?>
          </fieldset>


          <fieldset id="contact" class="tab row" data-tab-number="5" data-tab-enabled="false" style="display: none;">
            <?php include(IM3_ROOT_DIR . 'inc/views/tabs/contact.php'); ?>
          </fieldset>

          <section id="results" class="tab" data-tab-number="6" data-tab-enabled="false" style="display: none;">
          <?php include(IM3_ROOT_DIR . 'inc/views/tabs/results.php'); ?>
          </section>

          <nav id="tab-nav" class="btn-group btn-group-lg pull-right" style="margin-top: 10px; display: none;">
            <a href="" class="tab-nav prev btn btn-default">&laquo;&nbsp;Previous</a>
            <a href="" class="tab-nav next btn btn-default">Next&nbsp;&raquo;</a>
          </nav>
      	</form>
      </div>

<?php 
  include(IM3_ROOT_DIR . 'inc/views/fancybox-lists.php');
  include(IM3_ROOT_DIR . 'inc/views/footer.php');