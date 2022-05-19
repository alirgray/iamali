<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
          <h2><?php echo get_the_title( $post_id ); ?></h2>
          <h3>Beer info</h3>
          <table>
            <tbody>
              <tr>
                <th>Beer name</th>
                <td><?php echo get_the_title($post_id); ?></td>
                <th>Date</th>
                <td colspan="3"><?php echo get_the_date('F j, Y'); ?></td>
              </tr>
              <tr>
                <th>Style</th>
                <td><?php the_category(', '); ?></td>
                <th>Batch Volume</th>
                <td><?php the_field('batch_volume'); ?></td>
              </tr>
            </tbody>
          </table>
          <table>
              <tr>
                <th>OG target</th>
                <td><?php the_field('og_target'); ?></td>
                <th>OG actual</th>
                <td><?php the_field('og_actual'); ?></td>
                <th>TG</th>
                <td><?php the_field('tg'); ?></td>
              </tr>
              <tr>
                <th>ABV</th>
                <td><?php the_field('abv'); ?></td>
                <th>IBU</th>
                <td><?php the_field('ibu'); ?></td>
                <th>SRM</th>
                <td><?php the_field('srm'); ?></td>
              </tr>
            </tbody>
          </table>
          <br><br>
          <div class="col">
            <h3>Grains</h3>
            <table>
              <tbody>
                <tr>
                  <th>Type</th>
                  <th>Weight</th>
                </tr>
                <?php
                  if( have_rows('grain1') ):
                    while ( have_rows('grain1') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain2') ):
                    while ( have_rows('grain2') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain3') ):
                    while ( have_rows('grain3') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain4') ):
                    while ( have_rows('grain4') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain5') ):
                    while ( have_rows('grain5') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain6') ):
                    while ( have_rows('grain6') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain7') ):
                    while ( have_rows('grain7') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('grain8') ):
                    while ( have_rows('grain8') ) : the_row();
                      $type = get_sub_field('type');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
              </tbody>
            </table>
          </div>
          <div class="col">
            <h3>Hops</h3>
            <table>
              <tbody>
                <tr>
                  <th>Type</th>
                  <th>Form</th>
                  <th>Time</th>
                  <th>Weight</th>
                </tr>
                <?php
                  if( have_rows('hop1') ):
                    while ( have_rows('hop1') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop2') ):
                    while ( have_rows('hop2') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop3') ):
                    while ( have_rows('hop3') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop4') ):
                    while ( have_rows('hop4') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop5') ):
                    while ( have_rows('hop5') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop6') ):
                    while ( have_rows('hop6') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop7') ):
                    while ( have_rows('hop7') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('hop8') ):
                    while ( have_rows('hop8') ) : the_row();
                      $type = get_sub_field('type');
                      $form = get_sub_field('form');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$form</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
              </tbody>
            </table>
          </div>
          <br class="clear"><br><br>
          <div class="col">
            <h3>Other ingredients</h3>
            <table>
              <tbody>
                <tr>
                  <th>Type</th>
                  <th>Time</th>
                  <th>Weight</th>
                </tr>
                <?php
                  if( have_rows('other1') ):
                    while ( have_rows('other1') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other2') ):
                    while ( have_rows('other2') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other3') ):
                    while ( have_rows('other3') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other4') ):
                    while ( have_rows('other4') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other5') ):
                    while ( have_rows('other5') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other6') ):
                    while ( have_rows('other6') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other7') ):
                    while ( have_rows('other7') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('other8') ):
                    while ( have_rows('other8') ) : the_row();
                      $type = get_sub_field('type');
                      $time = get_sub_field('time');
                      $weight = get_sub_field('weight');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$time</td>
                          <td>$weight</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
              </tbody>
            </table>
          </div>
          <div class="col">
            <h3>H<sub>2</sub>O treatments</h3>
            <table>
              <tbody>
                <tr>
                  <th>Type</th>
                  <th>Amount</th>
                </tr>
                <?php
                  if( have_rows('h2o1') ):
                    while ( have_rows('h2o1') ) : the_row();
                      $type = get_sub_field('type');
                      $amount = get_sub_field('amount');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$amount</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
                <?php
                  if( have_rows('h2o2') ):
                    while ( have_rows('h2o2') ) : the_row();
                      $type = get_sub_field('type');
                      $amount = get_sub_field('amount');
                      echo
                        "<tr>
                          <td>$type</td>
                          <td>$amount</td>
                        </tr>";
                    endwhile;
                    else :
                  endif;
                ?>
              </tbody>
            </table>
          </div>
          <br class="clear"><br>
          <h3>Brew milestones</h3>
          <table>
            <tbody>
              <tr>
                <th colspan="2">Strike</th>
                <th colspan="2">Mash in</th>
                <th colspan="2">Boil</th>
              </tr>
              <tr>
                <td>Temp <br><?php the_field('strike_temp'); ?></td>
                <td>Volume <br><?php the_field('strike_volume'); ?></td>
                <td>Time <br><?php the_field('mash_time'); ?></td>
                <td>Temp <br><?php the_field('mash_temp'); ?></td>
                <td>Time <br><?php the_field('boil_time'); ?></td>
                <td>Volume <br><?php the_field('boil_volume'); ?></td>
              </tr>
            </tbody>
          </table>
          <h3>Fermentation</h3>
          <table>
            <tbody>
              <tr>
                <th>Yeast</th>
                <td><?php the_field('yeast'); ?></td>
                <th>Yeast volume</th>
                <td><?php the_field('yeast_volume'); ?></td>
              </tr>
            </tbody>
          </table>
          <br class="clear"><br>
          <h3>Notes</h3>
          <p><?php the_field('notes'); ?></p>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
