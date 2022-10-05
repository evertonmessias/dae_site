<?php
//Settings *************************************************
function home_page_html()
{ ?>
	<div class="settings-dae">
		<h1 class="title">Configurações da Pagina Inicial</h1>
		<hr>
		<form method="post" action="options.php">
			<?php settings_fields('home_option_grupo'); ?>			

			<!-- Name ********************************** -->
			<label>
				<h3 class="title">Titulo do Site: </h3>
				<input type="text" id="home_input_1" name="home_input_1" value="<?php echo get_option('home_input_1'); ?>" />
			</label>			

			<br><br><!-- Logo *************************************** -->
			<hr>

			<?php
			$home2 = get_option('home_input_2'); ?>
			<h3 class="title">Logo:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(1,2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="home_input_2" id="home_input_2" value="<?php echo $home2; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home2; ?>" target="_blank"><img style="height:30px" id="preview_home_input_2" alt="preview" title="preview" src="<?php echo $home2; ?>" /></a></td>
				</tr>
			</table>
			<span>(Ideal size: 300x300 px)</span>
			

			<br><br><!-- Número de Slides******************************* -->
			<hr>			
				<h3 class="title">Número de Slides: </h3>
				
				<input type="number" class="nslide" onKeyDown="return false" min="1" max="10" id="home_input_31" name="home_input_31" value="<?php echo get_option('home_input_31'); ?>" />
			
			<br><!-- Categoria dos Slides Desktop ******************************* -->
			<label>
				<h3 class="title">Categoria dos Slides Desktop: </h3>
				<select id="home_input_32" name="home_input_32">
					<option selected hidden><?php echo get_option('home_input_32'); ?></option>
					<?php
					$argsCat = array(
						'post_type' => 'post',
						'orderby'       => 'name',
						'order'         => 'ASC'
					);
					$categories = get_terms('category', $argsCat);
					foreach ($categories as $category) {
						echo '<option>' . $category->slug . '</option>';
					}
					?>
				</select>
			</label>

			<br><!-- Categoria dos Slides Mobile ******************************* -->
			<label>
				<h3 class="title">Categoria dos Slides Mobile: </h3>
				<select id="home_input_33" name="home_input_33">
					<option selected hidden><?php echo get_option('home_input_33'); ?></option>
					<?php
					$argsCat = array(
						'post_type' => 'post',
						'orderby'       => 'name',
						'order'         => 'ASC'
					);
					$categories = get_terms('category', $argsCat);
					foreach ($categories as $category) {
						echo '<option>' . $category->slug . '</option>';
					}
					?>
				</select>
			</label>
			<br><span>(Altera qual a <b>Categoria</b> do Post é exibida nos Slides)</span>



			<br><br><!-- Sobre ********************************** -->
			<hr>

			<label>
				<h3 class="title">Sobre: </h3>
				<?php
				$home5 = get_option('home_input_4'); 
				wp_editor($home5, 'home_about_box1', array('textarea_name' => 'home_input_4'));
				?>
				
			</label>
			
			
			<br><br><!-- Blocos Links ****************************** -->
			<hr>

			<h3 class="title">Blocos Links:</h3>
			<?php
			$home81 = get_option('home_input_81'); ?>			
			<table>
			<h3>Bloco 1: </h3>
				<tr>
					<td><a href="#" onclick="upload_image(1,81);" class="button button-secondary"><?php _e('Upload Icone'); ?></a></td>
					<td><input type="text" name="home_input_81" id="home_input_81" value="<?php echo $home81; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home81; ?>" target="_blank"><img style="height:30px" id="preview_home_input_81" alt="preview" title="preview" src="<?php echo $home81; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Título</div>
					</td>
					<td><input type="text" id="home_input_82" name="home_input_82" value="<?php echo get_option('home_input_82'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL</div>
					</td>
					<td><input type="text" id="home_input_83" name="home_input_83" value="<?php echo get_option('home_input_83'); ?>" /></td>
				</tr>
			</table>
			<br>
			<?php
			$home91 = get_option('home_input_91'); ?>			
			<table>
			<h3>Bloco 2: </h3>
				<tr>
					<td><a href="#" onclick="upload_image(1,91);" class="button button-secondary"><?php _e('Upload Icone'); ?></a></td>
					<td><input type="text" name="home_input_91" id="home_input_91" value="<?php echo $home91; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home91; ?>" target="_blank"><img style="height:30px" id="preview_home_input_91" alt="preview" title="preview" src="<?php echo $home91; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Título</div>
					</td>
					<td><input type="text" id="home_input_92" name="home_input_92" value="<?php echo get_option('home_input_92'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL</div>
					</td>
					<td><input type="text" id="home_input_93" name="home_input_93" value="<?php echo get_option('home_input_93'); ?>" /></td>
				</tr>
			</table>
			<br>	
			<?php
			$home101 = get_option('home_input_101'); ?>			
			<table>
			<h3>Bloco 3: </h3>
				<tr>
					<td><a href="#" onclick="upload_image(1,101);" class="button button-secondary"><?php _e('Upload Icone'); ?></a></td>
					<td><input type="text" name="home_input_101" id="home_input_101" value="<?php echo $home101; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home101; ?>" target="_blank"><img style="height:30px" id="preview_home_input_101" alt="preview" title="preview" src="<?php echo $home101; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Título</div>
					</td>
					<td><input type="text" id="home_input_102" name="home_input_102" value="<?php echo get_option('home_input_102'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL</div>
					</td>
					<td><input type="text" id="home_input_103" name="home_input_103" value="<?php echo get_option('home_input_103'); ?>" /></td>
				</tr>
			</table>			
			<br>
			<?php
			$home111 = get_option('home_input_111'); ?>			
			<table>
			<h3>Bloco 4: </h3>
				<tr>
					<td><a href="#" onclick="upload_image(1,111);" class="button button-secondary"><?php _e('Upload Icone'); ?></a></td>
					<td><input type="text" name="home_input_111" id="home_input_111" value="<?php echo $home111; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home111; ?>" target="_blank"><img style="height:30px" id="preview_home_input_111" alt="preview" title="preview" src="<?php echo $home111; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Título</div>
					</td>
					<td><input type="text" id="home_input_112" name="home_input_112" value="<?php echo get_option('home_input_112'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL</div>
					</td>
					<td><input type="text" id="home_input_113" name="home_input_113" value="<?php echo get_option('home_input_113'); ?>" /></td>
				</tr>
			</table>			
			<br>
			<?php
			$home121 = get_option('home_input_121'); ?>			
			<table>
			<h3>Bloco 5: </h3>
				<tr>
					<td><a href="#" onclick="upload_image(1,121);" class="button button-secondary"><?php _e('Upload Icone'); ?></a></td>
					<td><input type="text" name="home_input_121" id="home_input_121" value="<?php echo $home121; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home121; ?>" target="_blank"><img style="height:30px" id="preview_home_input_121" alt="preview" title="preview" src="<?php echo $home121; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Título</div>
					</td>
					<td><input type="text" id="home_input_122" name="home_input_122" value="<?php echo get_option('home_input_122'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL</div>
					</td>
					<td><input type="text" id="home_input_123" name="home_input_123" value="<?php echo get_option('home_input_123'); ?>" /></td>
				</tr>
			</table>
			<br>
			<?php
			$home131 = get_option('home_input_131'); ?>			
			<table>
			<h3>Bloco 6: </h3>
				<tr>
					<td><a href="#" onclick="upload_image(1,131);" class="button button-secondary"><?php _e('Upload Icone'); ?></a></td>
					<td><input type="text" name="home_input_131" id="home_input_131" value="<?php echo $home131; ?>" /></td>
					<td>&emsp;<a href="<?php echo $home131; ?>" target="_blank"><img style="height:30px" id="preview_home_input_131" alt="preview" title="preview" src="<?php echo $home131; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Título</div>
					</td>
					<td><input type="text" id="home_input_132" name="home_input_132" value="<?php echo get_option('home_input_132'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL</div>
					</td>
					<td><input type="text" id="home_input_133" name="home_input_133" value="<?php echo get_option('home_input_133'); ?>" /></td>
				</tr>
			</table>
			<br>
			<br><span>(Ideal size: 100x100 px)</span>

			<br><br><!-- Avisos ********************************** -->
			<hr>

			<label>
				<h3 class="title">Avisos: </h3>
				<?php
				$home5 = get_option('home_input_5'); 
				wp_editor($home5, 'home_about_box2', array('textarea_name' => 'home_input_5'));
				?>
				
			</label>


			<br><br><!-- Fone *************************************** -->
			<hr>

			<label>
				<h3 class="title">Telefone: </h3><input type="text" id="home_input_14" name="home_input_14" value="<?php echo get_option('home_input_14'); ?>" />
			</label>			

			<br><br><!-- WhatsApp *************************************** -->
			<hr>

			<label>
				<h3 class="title">WhatsApp: </h3><input type="text" id="home_input_15" name="home_input_15" value="<?php echo get_option('home_input_15'); ?>" />
			</label>							
			
			<br><br><!-- Endereço *************************************** -->
			<hr>

			<label>
				<h3 class="title">Endereço: </h3><input type="text" id="home_input_16" name="home_input_16" value="<?php echo get_option('home_input_16'); ?>" />
			</label>
			
			<br><br><!-- Maps *************************************** -->
			<hr>

			<label>
				<h3 class="title">Mapa: </h3><input type="text" id="home_input_17" name="home_input_17" value="<?php echo get_option('home_input_17'); ?>" />
			</label>
			<br><span>Ex.: https://www.google.com/maps/embed?xxx</span>

			<br><br><!-- Facebook *************************************** -->
			<hr>

			<label>
				<h3 class="title">Facebook: </h3><input type="text" id="home_input_18" name="home_input_18" value="<?php echo get_option('home_input_18'); ?>" />
			</label>

			<br><br><!-- Instagram *************************************** -->
			<hr>

			<label>
				<h3 class="title">Instagram: </h3><input type="text" id="home_input_19" name="home_input_19" value="<?php echo get_option('home_input_19'); ?>" />
			</label>
			
			<br><br><!-- *************************************** -->
			<hr>	

			<?php submit_button(); ?>
		</form>
	</div>
<?php
}

function home_options_page()
{
	add_submenu_page('dae', 'Pagina Inicial', 'Pagina Inicial', 'edit_posts', 'pagina-inicial', 'home_page_html', 1);
}
add_action('admin_menu', 'home_options_page');



//************************ DB Fields

function home_settings1()
{
	add_option('home_input_1');
	register_setting('home_option_grupo', 'home_input_1');
}
add_action('admin_init', 'home_settings1');

function home_settings2()
{
	add_option('home_input_2');
	register_setting('home_option_grupo', 'home_input_2');
}
add_action('admin_init', 'home_settings2');

function home_settings31()
{
	add_option('home_input_31');
	register_setting('home_option_grupo', 'home_input_31');
}
add_action('admin_init', 'home_settings31');


function home_settings32()
{
	add_option('home_input_32');
	register_setting('home_option_grupo', 'home_input_32');
}
add_action('admin_init', 'home_settings32');


function home_settings33()
{
	add_option('home_input_33');
	register_setting('home_option_grupo', 'home_input_33');
}
add_action('admin_init', 'home_settings33');


function home_settings4()
{
	add_option('home_input_4');
	register_setting('home_option_grupo', 'home_input_4');
}
add_action('admin_init', 'home_settings4');

function home_settings5()
{
	add_option('home_input_5');
	register_setting('home_option_grupo', 'home_input_5');
}
add_action('admin_init', 'home_settings5');

function home_settings6()
{
	add_option('home_input_6');
	register_setting('home_option_grupo', 'home_input_6');
}
add_action('admin_init', 'home_settings6');

function home_settings7()
{
	add_option('home_input_7');
	register_setting('home_option_grupo', 'home_input_7');
}
add_action('admin_init', 'home_settings7');

function home_settings81()
{
	add_option('home_input_81');
	register_setting('home_option_grupo', 'home_input_81');
}
add_action('admin_init', 'home_settings81');
function home_settings82()
{
	add_option('home_input_82');
	register_setting('home_option_grupo', 'home_input_82');
}
add_action('admin_init', 'home_settings82');
function home_settings83()
{
	add_option('home_input_83');
	register_setting('home_option_grupo', 'home_input_83');
}
add_action('admin_init', 'home_settings83');


function home_settings91()
{
	add_option('home_input_91');
	register_setting('home_option_grupo', 'home_input_91');
}
add_action('admin_init', 'home_settings91');
function home_settings92()
{
	add_option('home_input_92');
	register_setting('home_option_grupo', 'home_input_92');
}
add_action('admin_init', 'home_settings92');
function home_settings93()
{
	add_option('home_input_93');
	register_setting('home_option_grupo', 'home_input_93');
}
add_action('admin_init', 'home_settings93');


function home_settings101()
{
	add_option('home_input_101');
	register_setting('home_option_grupo', 'home_input_101');
}
add_action('admin_init', 'home_settings101');
function home_settings102()
{
	add_option('home_input_102');
	register_setting('home_option_grupo', 'home_input_102');
}
add_action('admin_init', 'home_settings102');
function home_settings103()
{
	add_option('home_input_103');
	register_setting('home_option_grupo', 'home_input_103');
}
add_action('admin_init', 'home_settings103');


function home_settings111()
{
	add_option('home_input_111');
	register_setting('home_option_grupo', 'home_input_111');
}
add_action('admin_init', 'home_settings111');
function home_settings112()
{
	add_option('home_input_112');
	register_setting('home_option_grupo', 'home_input_112');
}
add_action('admin_init', 'home_settings112');
function home_settings113()
{
	add_option('home_input_113');
	register_setting('home_option_grupo', 'home_input_113');
}
add_action('admin_init', 'home_settings113');


function home_settings121()
{
	add_option('home_input_121');
	register_setting('home_option_grupo', 'home_input_121');
}
add_action('admin_init', 'home_settings121');
function home_settings122()
{
	add_option('home_input_122');
	register_setting('home_option_grupo', 'home_input_122');
}
add_action('admin_init', 'home_settings122');
function home_settings123()
{
	add_option('home_input_123');
	register_setting('home_option_grupo', 'home_input_123');
}
add_action('admin_init', 'home_settings123');


function home_settings131()
{
	add_option('home_input_131');
	register_setting('home_option_grupo', 'home_input_131');
}
add_action('admin_init', 'home_settings131');
function home_settings132()
{
	add_option('home_input_132');
	register_setting('home_option_grupo', 'home_input_132');
}
add_action('admin_init', 'home_settings132');
function home_settings133()
{
	add_option('home_input_133');
	register_setting('home_option_grupo', 'home_input_133');
}
add_action('admin_init', 'home_settings133');


function home_settings14()
{
	add_option('home_input_14');
	register_setting('home_option_grupo', 'home_input_14');
}
add_action('admin_init', 'home_settings14');

function home_settings15()
{
	add_option('home_input_15');
	register_setting('home_option_grupo', 'home_input_15');
}
add_action('admin_init', 'home_settings15');

function home_settings16()
{
	add_option('home_input_16');
	register_setting('home_option_grupo', 'home_input_16');
}
add_action('admin_init', 'home_settings16');

function home_settings17()
{
	add_option('home_input_17');
	register_setting('home_option_grupo', 'home_input_17');
}
add_action('admin_init', 'home_settings17');

function home_settings18()
{
	add_option('home_input_18');
	register_setting('home_option_grupo', 'home_input_18');
}
add_action('admin_init', 'home_settings18');

function home_settings19()
{
	add_option('home_input_19');
	register_setting('home_option_grupo', 'home_input_19');
}
add_action('admin_init', 'home_settings19');