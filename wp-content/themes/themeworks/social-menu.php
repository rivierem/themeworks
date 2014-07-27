<?php
global $themeworks_config;
$social_medias = $themeworks_config['opt-social_medias']['enabled'];
if ($social_medias) {
	echo '<ul class="social_medias_list list-inline">';
	foreach ($social_medias as $social_media => $value) {
		switch ($social_media) {
			case 'facebook':
				echo '<li><a target="_blank" class="'.$social_media.'" href="'.$themeworks_config['opt-'.$social_media.''].'" title="'.ucfirst($social_media).'"><i class="el-icon-'.$social_media.'"></i></a></li>';
				break;
			case 'twitter':
				echo '<li><a target="_blank" class="'.$social_media.'" href="'.$themeworks_config['opt-'.$social_media.''].'" title="'.ucfirst($social_media).'"><i class="el-icon-'.$social_media.'"></i></a></li>';
				break;
			case 'googleplus':
				echo '<li><a target="_blank" class="'.$social_media.'" href="'.$themeworks_config['opt-'.$social_media.''].'" title="'.ucfirst($social_media).'"><i class="el-icon-'.$social_media.'"></i></a></li>';
				break;
			case 'linkedin':
				echo '<li><a target="_blank" class="'.$social_media.'" href="'.$themeworks_config['opt-'.$social_media.''].'" title="'.ucfirst($social_media).'"><i class="el-icon-'.$social_media.'"></i></a></li>';
				break;
			case 'youtube':
				echo '<li><a target="_blank" class="'.$social_media.'" href="'.$themeworks_config['opt-'.$social_media.''].'" title="'.ucfirst($social_media).'"><i class="el-icon-'.$social_media.'"></i></a></li>';
				break;

			default:
				# code...
				break;
		}
	}
	echo '</ul><!-- END .social_medias_list -->';
}
?>