<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header>

	<div data-sticky-container>
	  <div class="sticky" id="example" data-sticky data-margin-top="0" style="width:100%;" data-margin-bottom="0" data-top-anchor="topAnchorExample" data-btm-anchor="bottomOfContentId:bottom">
	    <nav data-magellan>
	      <ul class="horizontal menu expanded">
	      <li><a href="#first">PROGRAMME</a></li>
	      <li><a href="#second">BILLETERIE</a></li>
	      <li><a href="#third">INFOS PRATIQUES</a></li>
				<li><a href="#third">LABEL</a></li>
				<li><a href="#third">PARTENAIRES</a></li>
				<li><a href="#third">CONTACT</a></li>
	      </ul>
	    </nav>
	  </div>
	</div>

</header>



<section class="section-home">

</section>
<section class="call-to-scroll-bar">

</section>

<section class="section-programme">
	<div class="row">
		<h2 class="h2-2">PROGRAMME</h2>
		<div class="small-up-1 medium-up-6 large-up-12 ">
						<div class="block-prog column">
							<img src="/wp-content/themes/musique-action/assets/images/programme/1.png" alt="">
							<p class="p-bp-1"><strong>MER 3 MAI</strong></p>
							<p class="p-bp-2">Médiathèque</p>
							<p class="p-bp-3">CIE OUÏE/DIRE : Vous disiez phonographie ?</p>
							<a href="#" class="btn-plus">
								+
							</a>
						</div>
						<div class="block-prog column">
							<img src="/wp-content/themes/musique-action/assets/images/programme/2.png" alt="">
							<p class="p-bp-1"><strong>VEN 5 MAI</strong></p>
							<p class="p-bp-2">ST Léon, Nancy</p>
							<p class="p-bp-3">CHARLÈNE MARCHAND : Musique Action vu par ... </p>
							<a href="#" class="btn-plus">
								+
							</a>
						</div>
						<div class="block-prog column">
							<img src="/wp-content/themes/musique-action/assets/images/programme/3.png" alt="">
							<p class="p-bp-1"><strong>SAM 6 MAI</strong></p>
							<p class="p-bp-2">CCAM</p>
							<p class="p-bp-3">CIE OUÏE/DIRE : Poids-Plumes</p>
							<a href="#" class="btn-plus">
								+
							</a>
						</div>
						<div class="block-prog column">
							<img src="/wp-content/themes/musique-action/assets/images/programme/4.png" alt="">
							<p class="p-bp-1"><strong>MAR 9 MAI</strong></p>
							<p class="p-bp-2">Médiathèque</p>
							<p class="p-bp-3">ARNAUD MARTIN + ATELIER DU CRGN</p>
							<a href="#" class="btn-plus">
								+
							</a>
						</div>
						<div class="block-prog column">
							<img src="/wp-content/themes/musique-action/assets/images/programme/5.png" alt="">
							<p class="p-bp-1"><strong>MER 10 MAI</strong></p>
							<p class="p-bp-2">Le Hublot</p>
							<p class="p-bp-3">HUGUES REINERT : Chili 73...</p>
							<a href="#" class="btn-plus">
								+
							</a>
						</div>
	</div>
		</div>

</section>


<section class="section-billeterie">
	<div class="row">
		<h2 class="h2-1">BILLETERIE</h2>
			<div class="block-blt small-up-1 medium-up-6 large-up-12">
						<h3>ABONNEMENTS</h3>
						<p class="txt-blt">
Pass Week-End : <strong>60 €</strong> <br>
Pass 6 : <strong>54 €</strong> <br>
Pass 6 réduit : <strong>39 € </strong> <br>
Pass 6 réduit : <strong>39 € </strong><br>

						</p>
						<a class="btn-plus" href="#">+</a>
			</div>

		<div class="block-blt small-up-1 medium-up-6 large-up-12">
				<h3>INDIVIDUELLE</h3>
				<p class="txt-blt">
Tarif A/B/C/D : <strong>4€ à 17 €</strong> <br>
Tarifs studio : <strong>4€ à 6 €</strong> <br>
Tarifs TGP Frouard : <strong>4 à 11 €</strong> <br>


				</p>
				<a class="btn-plus" href="#">+</a>
		</div>
	</div>
</section>

<section class="section-info">
	<div class="row">
		<h2 class="h2-2">INFOS PRATIQUES</h2>
		<div class="small-up-1 medium-up-1 large-up-3">
		<p class="p-info column">Accueil, réservations

CCAM-Scène nationale de Vandœuvre <br>
rue de parme 54500 Vandœuvre-lès-Nancy<br>
<strong>TEL :</strong> +33 (0)3 83 56 15 00<br>
<strong>FAX :</strong> +33 (0)3 83 53 21 85<br>
www.centremalraux.com<br>
Pour s’y rendre</p>
		<p class="p-info column"><strong>VOITURE :</strong> autoroute A31-A33, sortie Vandœuvre Brabois / autoroute A31 depuis Metz, sortie Gentilly puis suivre Vandœuvre centre et Hôtel de ville.<br>
<strong>TRAIN :</strong> Nancy depuis ligne TGV Paris, Strasbourg ou Metz ou Nice.<br>
<strong>BUS :</strong> ligne 4, arrêt Parc des sports Nation / ligne 7, arrêt Fribourg<br>
<strong>TRAM :</strong> ligne 1, arrêt Vélodrome puis longer à pied sur 500m le boulevard de l’Europe en direction du Centre Commercial les Nations.<br>
<strong>TAXI :</strong> 03 83 37 65 37</p>
		<p class="p-info column">Les lieux du festival<br>

<strong>CCAM :</strong> rue de Parme, Vandœuvre<br>
<strong>SALLE DES FÊTES :</strong> place de Paris, Vandœuvre<br>
<strong>MÉDIATHÈQUE JULES VERNE :</strong> 2 Rue de Malines, Vandœuvre<br>
<strong>THÉÂTRE DE LA MANUFACTURE :</strong> 10 rue Baron Louis, Nancy<br>
<strong>TGP FROUARD :</strong> avenue de la Libération, Frouard<br>
<strong>MJC LILLEBONNE :</strong> 14 rue du Cheval Blanc, Nancy<br>
<strong>ESPACE SCOLAIRE ST LÉON :</strong> 28 rue St Léon, Nancy<br>
<strong>LE HUBLOT :</strong> 138 avenue de la Libération, Nancy<br>
<strong>LE ROYAL :</strong> rue Mon Désert, Nancy</p>
</div>
	</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2635.3766829695232!2d6.170942251297974!3d48.66003837916679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794989a06cb6535%3A0xb848698342c12a1f!2sCentre+Culturel+Andre+Malraux!5e0!3m2!1sfr!2sfr!4v1489508787456" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>

<section class="section-label">
	<h2 class="h2-1">LABEL</h2>
	<div class="logo-label">

	</div>
	<p>
		Vand'Oeuvre est le label discographique du CCAM de Vandœuvre-lès-Nancy (et donc du festival Musique Action).<br> Dès le lancement du projet musical de Vandœuvre, il est apparu indispensable de mettre en mémoire les <br>événements musicaux produits par le CCAM, et de les mettre à disposition du plus grand nombre. L'idée de <br>cette collection discographique constituée
d'exclusivités était née.
	</p>

	<a href="#" class="a-btn">Découvrir</a>
</section>

<section class="section-partner">
	<h2 class="h2-2">PARTENARIAT</h2>



	<a href="#" class="a-btn">AFFICHER PLUS</a>
</section>

<section class="section-contact">
	<h2 class="h2-1">Contactez-nous</h2>
	<form action="#" class="" method="post">
		<label for="name">Nom</label><br>
		<input id="name" name="name" type="text" value=""><br>
		<label for="email">E-Mail</label><br>
		<input id="email" name="email" type="text" value=""><br>
		<label for="phone">Téléphone</label><br>
		<input id="phone" name="phone" type="text" value=""><br>
		<label for="message">Message</label><br>
		<textarea cols="80" id="message" name="message" rows="8"></textarea><br>
		<br>
		<input name="submit" type="submit" value="Envoyer">
	</form>

</section>

<?php get_footer();
