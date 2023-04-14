<?php

// ajoute les champs du back-office
function mentions_legales_settings() {
	add_settings_section("section", "Informations importantes", "texte_informations_importantes", "mentions_legales_options");
	add_settings_section("section_b", "Professions réglementées", null, "mentions_legales_options");
	add_settings_section("section_c", "Règlement général sur la protection des données (RGPD)", "rgpd", "mentions_legales_options");

	add_settings_field("nom_entreprise", "Dénomination sociale ou raison sociale", "nom_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("formejuridique_entreprise", "Forme juridique", "formejuridique_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("adresse_entreprise", "Adresse du siège social", "adresse_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("numero_entreprise", "Téléphone du siège social", "numero_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("mail_entreprise", "Mail de l'entreprise", "mail_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("capital_entreprise", "Montant du capital social", "capital_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("siret_entreprise", "Siret", "siret_entreprise_display", "mentions_legales_options", "section");
	add_settings_field("rcs_entreprise", "Immatriculation RCS", "rcs_entreprise_display", "mentions_legales_options", "section");

	add_settings_field("responsable_publication", "Responsable de publication", "responsable_publication_display", "mentions_legales_options", "section");
	add_settings_field("hebergeur", "Dénomination ou raison sociale de l'hébergeur", "hebergeur_display", "mentions_legales_options", "section");
	add_settings_field("adresse_hebergeur", "Adresse de l'hébergeur", "adresse_hebergeur_display", "mentions_legales_options", "section");
	add_settings_field("tel_hebergeur", "Téléphone de l'hébergeur", "tel_hebergeur_display", "mentions_legales_options", "section");

	add_settings_field("regles_pro", "Textes liés aux règles professionnelles applicables", "regles_pro_display", "mentions_legales_options", "section_b");
	add_settings_field("titre_pro", "Titre professionnel", "titre_prodisplay", "mentions_legales_options", "section_b");
	add_settings_field("pays_titrepro", "Pays d'obtention du titre professionnel", "pays_titreprodisplay", "mentions_legales_options", "section_b");
	add_settings_field("ordre_titrepro", "Ordre ou organisme représentant", "ordre_titreprodisplay", "mentions_legales_options", "section_b");
	add_settings_field("autorisation_titrepro", "Pour les activités soumises à régime d'autorisation", "autorisation_titrepro_display", "mentions_legales_options", "section_b");	

	add_settings_field("responsable_rgpd", "Responsable RGPD", "responsable_rgpd_display", "mentions_legales_options", "section_c");


	register_setting("section", "nom_entreprise");
	register_setting("section", "adresse_entreprise");
	register_setting("section", "formejuridique_entreprise");
	register_setting("section", "numero_entreprise");
	register_setting("section", "mail_entreprise");
	register_setting("section", "capital_entreprise");
	register_setting("section", "siret_entreprise");
	register_setting("section", "rcs_entreprise");
	register_setting("section", "responsable_publication");
	register_setting("section", "hebergeur");
	register_setting("section", "adresse_hebergeur");
	register_setting("section", "tel_hebergeur");
	register_setting("section_b", "regles_pro");
	register_setting("section_b", "titre_pro");
	register_setting("section_b", "pays_titrepro");
	register_setting("section_b", "ordre_titrepro");
	register_setting("section_b", "autorisation_titrepro");
	register_setting("section_c", "responsable_rgpd");


	//add_settings_section("section_end", null,'credits_aurelien', "mentions_legales_options");

	// Ajout de l'action pour afficher les crédits dans le footer
	add_action('my_section_end_hook', 'credits_aurelien');
}

function texte_informations_importantes() {
	?>
	<div class="cadre-important">
    <p>Tous les sites internet, qu’ils soient édités à titre professionnel ou à titre non professionnel, doivent afficher des mentions obligatoires pour l’information du public. Le non-respect de ces obligations est sanctionné par la loi.
	<br>Les professions réglementées sont dans l’obligation de préciser des mentions spécifiques telles que :<br>
	<ul>
		<li>Les référence aux règles professionnelles applicables pour son activité réglementée </li>
		<li>Le titre professionnel</li>
		<li>L'état membre dans lequel a été octroyé le titre professionnel</li>
		<li>Le nom de l'ordre ou de l'organisme professionnel auprès duquel elle est inscrite</li>
	</ul>
	<br>Vous êtes seul responsable et propriétaire des informations contenus sur votre site web. Il vous appartient de vérifier toutes les informations rédigées, par vous même ou par un tiers, sur votre site web.
	<br>En cas de besoin, vous pouvez contacter Aurelien Giorgino : <a href="mailto:agiorgino@vpstrat.com">agiorgino@vpstrat.com</a></p>
</div>
	<?php
}

function nom_entreprise_display() {
	?>
	<input type="text" name="nom_entreprise" value="<?php echo get_option('nom_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function adresse_entreprise_display() {
	?>
	<input type="text" name="adresse_entreprise" value="<?php echo get_option('adresse_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function formejuridique_entreprise_display() {
	?>
	<input type="text" name="formejuridique_entreprise" value="<?php echo get_option('formejuridique_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function numero_entreprise_display() {
	?>
	<input type="tel" name="numero_entreprise" value="<?php echo get_option('numero_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function mail_entreprise_display() {
	?>
	<input type="mail" name="mail_entreprise" value="<?php echo get_option('mail_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function capital_entreprise_display() {
	?>
	<input type="text" name="capital_entreprise" value="<?php echo get_option('capital_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function siret_entreprise_display() {
	?>
	<input type="text" name="siret_entreprise" value="<?php echo get_option('siret_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function rcs_entreprise_display() {
	?>
	<input type="text" name="rcs_entreprise" value="<?php echo get_option('rcs_entreprise'); ?>" style="width: 100%;" />
	<?php
}

function responsable_publication_display() {
	?>
	<input type="text" name="responsable_publication" value="<?php echo get_option('responsable_publication'); ?>" style="width: 100%;" />
	<?php
}

function hebergeur_display() {
	?>
	<input type="text" name="hebergeur" value="<?php echo get_option('hebergeur'); ?>" style="width: 100%;" />
	<?php
}

function adresse_hebergeur_display() {
	?>
	<input type="text" name="adresse_hebergeur" value="<?php echo get_option('adresse_hebergeur'); ?>" style="width: 100%;" />
	<?php
}

function tel_hebergeur_display() {
	?>
	<input type="tel" name="tel_hebergeur" value="<?php echo get_option('tel_hebergeur'); ?>" style="width: 100%;" />
	<?php
}

function regles_pro_display() {
	?>
	<p>Pour une activité réglementée, le site internet doit mentionner les règles professionnelles applicables à sa profession</p>
	<textarea name="regles_pro" rows="10" style="width: 100%;"><?php echo get_option('regles_pro'); ?></textarea>
	<?php
}

function titre_prodisplay() {
	?>
		<p>Diplôme obtenu ou titre académique</p>
	<input type="text" name="titre_pro" value="<?php echo get_option('titre_pro'); ?>" style="width: 100%;" />
	<?php
}

function pays_titreprodisplay() {
	?>
	<input type="text" name="pays_titrepro" value="<?php echo get_option('pays_titrepro'); ?>" style="width: 100%;" />
	<?php
}

function ordre_titreprodisplay() {
	?>
		<p>Nom de l'Ordre ou de l'organisme qui représente la profession</p>
	<input type="text" name="ordre_titrepro" value="<?php echo get_option('ordre_titrepro'); ?>" style="width: 100%;" />
	<?php
}

function autorisation_titrepro_display() {
	?>
		<p>Nom et adresse de l’autorité ayant délivré votre autorisation d’exercer</p>
	<input type="text" name="autorisation_titrepro" value="<?php echo get_option('autorisation_titrepro'); ?>" style="width: 100%;" />
	<?php
}

function rgpd() {
	?>
	<div class="sections">
    <p>Afin de respecter votre devoir d'information au moment de la collecte de données personnelles, vous devez donner accès aux informations suivantes :</p>
		<ul>
			<li>Identité et coordonnées de l’organisme responsable du traitement de données</li>
			<li>Coordonnées du délégué à la protection des données (DPO), ou d’un point de contact sur les questions de protection des données personnelles</li>
			<li>Base juridique du traitement de données (consentement de l’internaute, respect d’une obligation prévue par un texte, exécution d’un contrat, etc.)</li>
			<li>Finalités des données collectées (pour prise de décisions automatisée, pour prévenir la fraude, parce que les informations sont requises par la réglementation, etc.)</li>
			<li>Caractère obligatoire ou facultatif du recueil des données et les conséquences pour la personne en cas de non-fourniture des données</li>
			<li>Destinataires ou catégories de destinataires des données</li>
			<li>Durée de conservation des données</li>
			<li>Transferts de données à caractère personnel envisagés à destination d'un État n'appartenant pas à l'Union européenne.</li>
		</ul>	
</div>
	<?php
}

function responsable_rgpd_display() {
	?>
	<input type="text" name="responsable_rgpd" value="<?php echo get_option('responsable_rgpd'); ?>" style="width: 100%;" />
	<?php
}

function credits_aurelien(){
    //Ajout copyrigth et autheur
    echo '<p>Ce plugin a été réalisé par <a href="https://www.linkedin.com/in/aureliengiorgino/" target="_blank">Aurélien Arnaud Giorgino</a>, associé pôle digital agence de communication VP Strat</p>
    <a href="https://www.vpstrat.com" target="_blank"><img src="https://www.vpstrat.com/wp-content/uploads/2023/04/Agence-de-communication-VP-Strat.png" height="45"></a>';
}


function mentions_legales_options(){
    // Vérification de la permission de l'utilisateur
    if(!current_user_can('manage_options')){
		wp_safe_redirect(home_url());
		exit;
	}	

    // Ajout du titre de la page
    echo '<h1>' . esc_html(get_admin_page_title()) . '</h1>';

    // Affichage des erreurs de validation
    settings_errors();

    // Vérification de la mise à jour des options
    if (isset($_POST["update_settings"])) {
        // Vérification du nonce de sécurité
        check_admin_referer("update", "update_settings");

        // Enregistrement des options
        update_option("ml_email", $_POST["ml_email"]);
        update_option("ml_phone", $_POST["ml_phone"]);
        update_option("ml_address", $_POST["ml_address"]);

        // Affichage d'un message de confirmation
        ?>
        <div class="updated">
            <p><?php _e("Les modifications ont été enregistrées.", "mentions-legales-plugin"); ?></p>
        </div>
        <?php
    }
    
    // Début du formulaire
    ?>
    <form method="post" action="options.php">
        <?php 
        // Ajout des champs personnalisables
        settings_fields("section");
		settings_fields("section_b");
		settings_fields("section_c");
        do_settings_sections("mentions_legales_options");
        
        // Ajout du bouton d'enregistrement
        submit_button("Enregistrer les modifications");

		do_action('register_setting');
		do_action('my_section_end_hook');
        ?>
    </form>
    <?php
}

