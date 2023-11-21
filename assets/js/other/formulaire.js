function havesantepb_fc() {
    var havesantepb_var = document.getElementById("havesantepb").value
    var a = document.getElementsByClassName("havesantepb_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (havesantepb_var == "oui") {
        document.getElementById("santepbtype").style.display = "block"
    } else {
        document.getElementById("santepbtype").style.display = "none"
    }
}



function santepblist_fc() {
    var santepblist_var = document.getElementById("santepblist").value
    var a = document.getElementsByClassName("santepblist_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (santepblist_var == "maladie") {
        document.getElementById("statutmaladie").style.display = "block";
    } else if (santepblist_var == "grossesse") {
        document.getElementById("statutgrossesse").style.display = "block";
    }
}



function citylist_fc() {
    var citylist_var = document.getElementById("citylist").value
    var a = document.getElementsByClassName("citylist_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (citylist_var == "agadir") {
        document.getElementById("agadir_list").style.display = "block";
    } else if (citylist_var == "beni_mellal") {
        document.getElementById("beni_mellal_list").style.display = "block";
    } else if (citylist_var == "berkane") {
        document.getElementById("berkane_list").style.display = "block";
    } else if (citylist_var == "casablanca") {
        document.getElementById("casablanca_list").style.display = "block";
    } else if (citylist_var == "el-jadida") {
        document.getElementById("el-jadida_list").style.display = "block";
    } else if (citylist_var == "fes") {
        document.getElementById("fes_list").style.display = "block";
    } else if (citylist_var == "inezgane") {
        document.getElementById("inezgane_list").style.display = "block";
    } else if (citylist_var == "kenitra") {
        document.getElementById("kenitra_list").style.display = "block";
    } else if (citylist_var == "khemiset") {
        document.getElementById("khemiset_list").style.display = "block";
    } else if (citylist_var == "khenifra") {
        document.getElementById("khenifra_list").style.display = "block";
    } else if (citylist_var == "khouribga") {
        document.getElementById("khouribga_list").style.display = "block";
    } else if (citylist_var == "laayoune") {
        document.getElementById("laayoune_list").style.display = "block";
    } else if (citylist_var == "marrakech") {
        document.getElementById("marrakech_list").style.display = "block";
    } else if (citylist_var == "meknes") {
        document.getElementById("meknes_list").style.display = "block";
    } else if (citylist_var == "mohammedia") {
        document.getElementById("mohammedia_list").style.display = "block";
    } else if (citylist_var == "nador") {
        document.getElementById("nador_list").style.display = "block";
    } else if (citylist_var == "oujda") {
        document.getElementById("oujda_list").style.display = "block";
    } else if (citylist_var == "rabat") {
        document.getElementById("rabat_list").style.display = "block";
    } else if (citylist_var == "safi") {
        document.getElementById("safi_list").style.display = "block";
    } else if (citylist_var == "sale") {
        document.getElementById("sale_list").style.display = "block";
    } else if (citylist_var == "tanger") {
        document.getElementById("tanger_list").style.display = "block";
    } else if (citylist_var == "taza") {
        document.getElementById("taza_list").style.display = "block";
    } else if (citylist_var == "temara") {
        document.getElementById("temara_list").style.display = "block";
    } else if (citylist_var == "tetouan") {
        document.getElementById("tetouan_list").style.display = "block";
    }
}



function haveid_fc() {
    var haveid_var = document.getElementById('haveid').value
    if (haveid_var == "non") {
        document.getElementById('iddate').style.display = 'none'
        document.getElementById('carteconsulaire_infobox').style.display = 'block'
    } else if (haveid_var == "blank") {
        document.getElementById('iddate').style.display = 'none'
        document.getElementById('carteconsulaire_infobox').style.display = 'none'
    } else {
        document.getElementById('iddate').style.display = 'block'
        document.getElementById('carteconsulaire_infobox').style.display = 'none'
    }
}


function havesejour_fc() {
    var havesejour_var = document.getElementById('havesejour').value
    if (havesejour_var == "non") {
        document.getElementById('sejourdate').style.display = 'none'
    } else if (havesejour_var == "blank") {
        document.getElementById('sejourdate').style.display = 'none'
    } else {
        document.getElementById('sejourdate').style.display = 'block'
    }
}



function enfantpays_fc() {
    var enfantpays_var = document.getElementById("enfantpays").value
    if (enfantpays_var == "oui") {
        document.getElementById("enfant_nombre").style.display = "block";
    } else {
        document.getElementById("enfant_nombre").style.display = "none";
    }
}



function searchfamilly_fc() {
    var searchfamilly_var = document.getElementById("searchfamilly").value
    if (searchfamilly_var == "oui") {
        document.getElementById("searchfamilly_infobox").style.display = "block";
    } else {
        document.getElementById("searchfamilly_infobox").style.display = "none";
    }
}



function violence_pays_fc() {
    var violence_pays_var = document.getElementById('violence_pays').value
    var a = document.getElementsByClassName("violence_pays_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (violence_pays_var == "oui") {
        document.getElementById('violencesex_ask_pays').style.display = 'block'
        document.getElementById('violenceinfo_pays').style.display = 'block'
        document.getElementById("asile_infobox").style.display = "block"
    } else {
        document.getElementById('violencesex_ask_pays').style.display = 'none'
        document.getElementById('violenceinfo_pays').style.display = 'none'
        document.getElementById("asile_infobox").style.display = "none"
    }
}



function violencesex_pays_fc() {
    var violencesex_pays_var = document.getElementById("violencesex_pays").value
    if (violencesex_pays_var == "oui") {
        document.getElementById("depistage_infobox").style.display = "block";
    } else {
        document.getElementById("depistage_infobox").style.display = "none";
    }
}


function violence_trajet_fc() {
    var violence_trajet_var = document.getElementById('violence_trajet').value
    var a = document.getElementsByClassName("violence_trajet_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (violence_trajet_var == "oui") {
        document.getElementById('violencesex_ask_trajet').style.display = 'block'
        document.getElementById('violenceinfo_trajet').style.display = 'block'
        document.getElementById('violence_trajet_mena').style.display = 'block'
    } else {
        document.getElementById('violencesex_ask_trajet').style.display = 'none'
        document.getElementById('violenceinfo_trajet').style.display = 'none'
        document.getElementById('violence_trajet_mena').style.display = 'none'
    }
}



function violencesex_trajet_fc() {
    var violencesex_trajet_var = document.getElementById("violencesex_trajet").value
    if (violencesex_trajet_var == "oui") {
        document.getElementById("depistage2_infobox").style.display = "block";
    } else {
        document.getElementById("depistage2_infobox").style.display = "none";
    }

}



function tentatives_fc() {
    var tentatives_var = document.getElementById("tentatives").value
    if (tentatives_var == "oui") {
        document.getElementById("tentatives_nbr").style.display = "block";
    } else {
        document.getElementById("tentatives_nbr").style.display = "none";
    }
}



function foret_ask_fc() {
    var foret_ask_var = document.getElementById("foret_ask").value
    if (foret_ask_var == "oui") {
        document.getElementById("foret_lieu").style.display = "inline-block";
        document.getElementById("foret_duree").style.display = "inline-block";
    } else {
        document.getElementById("foret_lieu").style.display = "none";
        document.getElementById("foret_duree").style.display = "none";
    }
}



function arrestations_fc() {
    var arrestations_var = document.getElementById("arrestations").value
    if (arrestations_var == "oui") {
        document.getElementById("arrestations_nbr").style.display = "block";
    } else {
        document.getElementById("arrestations_nbr").style.display = "none";
    }
}



function deplacement_ask_fc() {
    var deplacement_ask_var = document.getElementById("deplacement_ask").value
    if (deplacement_ask_var == "oui") {
        document.getElementById("deplacement_title").style.display = "block";
        document.getElementById("deplacement_info").style.display = "block";
    } else {
        document.getElementById("deplacement_title").style.display = "none";
        document.getElementById("deplacement_info").style.display = "none";
    }
}



function detention_ask_fc() {
    var detention_ask_var = document.getElementById("detention_ask").value
    if (detention_ask_var == "oui") {
        document.getElementById("detention_info").style.display = "block";
    } else {
        document.getElementById("detention_info").style.display = "none";
    }
}



function expulsion_ask_fc() {
    var expulsion_ask_var = document.getElementById("expulsion_ask").value
    if (expulsion_ask_var == "oui") {
        document.getElementById("expulsion_info").style.display = "block";
    } else {
        document.getElementById("expulsion_info").style.display = "none";
    }
}



function lieulogement_fc() {
    var lieulogement_var = document.getElementById("lieulogement").value
    var a = document.getElementsByClassName("typelogement_int_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (lieulogement_var == "interieur") {
        document.getElementById("typelogement_int_list").style.display = "block";
        document.getElementById("typelogement_ext_list").style.display = "none";
    } else if (lieulogement_var == "exterieur") {
        document.getElementById("typelogement_ext_list").style.display = "block";
        document.getElementById("typelogement_int_list").style.display = "none";
    } else {
        document.getElementById("typelogement_ext_list").style.display = "none";
        document.getElementById("typelogement_int_list").style.display = "none";
    }
}



function typelogement_int_ask_fc() {
    var typelogement_int_ask_var = document.getElementById("typelogement_int_ask").value
    if (typelogement_int_ask_var == "appartement") {
        document.getElementById("fraislogementappart").style.display = "block";
        document.getElementById("typelogementappart").style.display = "block";
    } else {
        document.getElementById("fraislogementappart").style.display = "none";
        document.getElementById("typelogementappart").style.display = "none";
    }
}



function travail_fc() {
    var travail_var = document.getElementById("travail").value
    if (travail_var == "oui") {
        document.getElementById("activitepro").style.display = "block";
    } else {
        document.getElementById("activitepro").style.display = "none";
    }
}



function travailpasse_fc() {
    var travailpasse_var = document.getElementById("travailpasse").value
    if (travailpasse_var == "oui") {
        document.getElementById("activitepasse").style.display = "block";
    } else {
        document.getElementById("activitepasse").style.display = "none";
    }
}


function niveauetude_fc() {
    var niveauetude_var = document.getElementById("niveauetude").value
    var a = document.getElementsByClassName("niveauetude_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (niveauetude_var == "lycee") {
        document.getElementById("lyceelevel").style.display = "block";
        document.getElementById("lyceecom").style.display = "block";
    } else if (niveauetude_var == "universite") {
        document.getElementById("unilevel").style.display = "block";
        document.getElementById("unicom").style.display = "block";
        document.getElementById("lyceebac").style.display = "none";
    }
}

function niveaulycee_fc() {
    var niveaulycee_var = document.getElementById("niveaulycee").value
    if (niveaulycee_var == "lycee3") {
        document.getElementById("lyceebac").style.display = "block";
    } else {
        document.getElementById("lyceebac").style.display = "none";
    }
}



function bacobtenu_fc() {
    var bacobtenu_var = document.getElementById("bacobtenu").value
    if (bacobtenu_var == "oui") {
        document.getElementById("bacaccess").style.display = "block";
    } else {
        document.getElementById("bacaccess").style.display = "none";
    }
}



function diplomeobtenu_fc() {
    var diplomeobtenu_var = document.getElementById("diplomeobtenu").value
    if (diplomeobtenu_var == "oui") {
        document.getElementById("uniaccess").style.display = "block";
    } else {
        document.getElementById("uniaccess").style.display = "none";
    }
}



function formationpasse_fc() {
    var formationpasse_var = document.getElementById("formationpasse").value
    if (formationpasse_var == "oui") {
        document.getElementById("formationrecu_box").style.display = "block";
    } else {
        document.getElementById("formationrecu_box").style.display = "none";
    }
}



function travail_fc() {
    var travail_var = document.getElementById("travail").value
    if (travail_var == "oui") {
        document.getElementById("activitepro").style.display = "block";
    } else {
        document.getElementById("activitepro").style.display = "none";
    }
}



function travailpasse_fc() {
    var travailpasse_var = document.getElementById("travailpasse").value
    if (travailpasse_var == "oui") {
        document.getElementById("activitepasse").style.display = "block";
    } else {
        document.getElementById("activitepasse").style.display = "none";
    }
}



function travailpasseplus_fc() {
    var travailpasseplus_var = document.getElementById("travailpasseplus").value
    if (travailpasseplus_var == "oui") {
        document.getElementById("activitepasse_box").style.display = "block";
    } else {
        document.getElementById("activitepasse_box").style.display = "none";
    }
}


function orientationsource_fc() {
    var orientationsource_var = document.getElementById("orientationsource").value
    var a = document.getElementsByClassName("orientationsource_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (orientationsource_var == "ong") {
        document.getElementById("orientationsource_ong").style.display = "block";
    } else if (orientationsource_var == "centrecaritas") {
        document.getElementById("orientationsource_centrecaritas").style.display = "block";
    } else if (orientationsource_var == "onu") {
        document.getElementById("orientationsource_onu").style.display = "block";
    } else if (orientationsource_var == "public") {
        document.getElementById("orientationsource_public").style.display = "block";
    } else if (orientationsource_var == "autre") {
        document.getElementById("orientationsource_autre").style.display = "block";
    }
}



function pectype_fc() {
    var pectype_var = document.getElementById("pectype").value
    var a = document.getElementsByClassName("pec_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (pectype_var == "alimentation") {
        document.getElementById("pec_alim").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "couverture") {
        document.getElementById("pec_couvtype").style.display = "block";
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "douche") {
        document.getElementById("pec_douchekit").style.display = "block";
        document.getElementById("pec_observationl").style.display = "block";
    } else if (pectype_var == "loyer") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "matelas") {
        document.getElementById("pec_matelastype").style.display = "block";
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "vetements") {
        document.getElementById("pec_vetementstype").style.display = "block";
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "transport") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "retour") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "couches") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "creche") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "lait") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "naissance") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    } else if (pectype_var == "autre") {
        document.getElementById("pec_observation").style.display = "block";
        document.getElementById("pecmontant").style.display = "block";
        document.getElementById("codecompta").style.display = "block";
    }
}

function pec_alim_list_fc() {
    var pec_alim_list_var = document.getElementById("pec_alim_list").value
    if (pec_alim_list_var == "bon") {
        document.getElementById("pec_alim_type").style.display = "block";
    } else if (pec_alim_list_var == "panier") {
        document.getElementById("pec_alim_type").style.display = "block";
    } else {
        document.getElementById("pec_alim_type").style.display = "none";
    }
}

function pec_douche_list_fc() {
    var pec_douche_list_var = document.getElementById("pec_douche_list").value
    if (pec_douche_list_var == "oui") {
        document.getElementById("codecompta").style.display = "block";
    } else {
        document.getElementById("codecompte").style.display = "none";
    }
}


/* ----------------------- Formulaires --------------------------*/

/* Choix du type de formulaire */
function typeform_fc() {
    var typeform_var = document.getElementById("typeform").value
    var a = document.getElementsByClassName("typeform_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (typeform_var == "visite") {
        document.getElementById("visite").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "entretien") {
        document.getElementById("entretien").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "accompagnement") {
        document.getElementById("accompagnement").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "etudedossier") {
        document.getElementById("etudedossier").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "hebergement_entree") {
        /* -----Seulement pour logement */
        document.getElementById("hebergement_entree").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "hebergement_sortie") {
        /* ---- Seulement pour logement */
        document.getElementById("hebergement_sortie").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "pointdossier") {
        /* ---- Seulement pour logement */
        document.getElementById("pointdossier").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "tpp") {
        /* ------------------- Seulement pour  service insertion */
        document.getElementById("tpp").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "appui") {
        /* ------------------- Seulement pour  service insertion */
        document.getElementById("appui").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "atelier") {
        /*  -------------- Seulement pour  service psy */
        document.getElementById("atelier").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (typeform_var == "grossesse") {
        /*  -------------- Seulement pour  service santé */
        document.getElementById("grossesse").style.display = "block";
        document.getElementById("validform").style.display = "block";
    }
}


/* --------------------- Formulaires social -----------------------*/

function ouverturedossier_fc() {
    var ouverturedossier_var = document.getElementById("ouverturedossier").value
    if (ouverturedossier_var == "urgence") {
        document.getElementById("motifurgence").style.display = "block";
    } else {
        document.getElementById("motifurgence").style.display = "none";
    }
}


function first_entretien_fc() {
    var checkBox = document.getElementById("first_entretien");
    var text = document.getElementById("social_familly_out");
    if (checkBox.checked == true) {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}


/* --------------- Formulaires éducation (eduyear) -----------------*/
/* Choix du type d'année */
function eduyearform_fc() {
    var eduyearform_var = document.getElementById("eduyearform").value
    var a = document.getElementsByClassName("eduyearform_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (eduyearform_var == "scolaire") {
        document.getElementById("scolaire").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (eduyearform_var == "formation") {
        document.getElementById("formation").style.display = "block";
        document.getElementById("validform").style.display = "block";
    }
}

/* Bilan année scolaire */
function bilanscolaire_fc() {
    var bilanscolaire_var = document.getElementById("bilanscolaire").value
    var a = document.getElementsByClassName("bilanscolaire_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (bilanscolaire_var == "desinscription") {
        document.getElementById("desinscription_scolairemotif").style.display = "block";
        document.getElementById("desinscription_scolairedate").style.display = "block";
    } else if (bilanscolaire_var == "classesup") {
        document.getElementById("affectationsup_scolaire").style.display = "block";
    }
}

/* Si motif désinscription scolaire = autre */
function motifselect_formation_fc() {
    var motifselect_formation_var = document.getElementById("motifselect_formation").value
    if (motifselect_formation_var == "autre") {
        document.getElementById("desinscription_formationautre").style.display = "block";
    } else {
        document.getElementById("desinscription_formationautre").style.display = "none";
    }
}

/* Si lieu de formation = exterieur */
function lieuformation_fc() {
    var lieuformation_var = document.getElementById("lieuformation").value
    if (lieuformation_var == "exterieur") {
        document.getElementById("lieuformation_ext").style.display = "block";
    } else {
        document.getElementById("lieuformation_ext").style.display = "none";
    }
}

/* Si centre conventionné = autre */
function conventioncentre_fc() {
    var conventioncentre_var = document.getElementById("conventioncentre").value
    if (conventioncentre_var == "autre") {
        document.getElementById("conventioncentre_autre").style.display = "block";
    } else {
        document.getElementById("conventioncentre_autre").style.display = "none";
    }
}

/* Bilan année formation */
function bilanformation_fc() {
    var bilanformation_var = document.getElementById("bilanformation").value
    var a = document.getElementsByClassName("bilanformation_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (bilanformation_var == "desinscription") {
        document.getElementById("desinscription_formationmotif").style.display = "block";
        document.getElementById("desinscription_formationdate").style.display = "block";
    } else if (bilanformation_var == "classesup") {
        document.getElementById("affectationsup_formation").style.display = "block";
    }
}

/* Si motif désinscription formation = autre */
function motifselect_formation_fc() {
    var motifselect_formation_var = document.getElementById("motifselect_formation").value
    if (motifselect_formation_var == "autre") {
        document.getElementById("desinscription_formationautre").style.display = "block";
    } else {
        document.getElementById("desinscription_formationautre").style.display = "none";
    }
}

/* --------------- Formulaires sante (form_sante) -----------------*/
/* Choix du type de visite */
function lieuvisite_sante_fc() {
    var lieuvisite_sante_var = document.getElementById("lieuvisite_sante").value
    var a = document.getElementsByClassName("lieuvisite_sante_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (lieuvisite_sante_var == "domicile") {
        document.getElementById("domicile").style.display = "block";
    } else if (lieuvisite_sante_var == "hopital") {
        document.getElementById("hopital").style.display = "block";
    }
}

/* Si sous traitement = oui */
function soustraitement_sante_fc() {
    var soustraitement_sante_var = document.getElementById("soustraitement_sante").value
    if (soustraitement_sante_var == "oui") {
        document.getElementById("datetraitement").style.display = "block";
    } else {
        document.getElementById("datetraitement").style.display = "none";
    }
}


/* --------------- Formulaires insertion (form_insertion) -----------------*/

/* Si changement de situation économique = oui */
function chgmts_situationeco_fc() {
    var chgmts_situationeco_var = document.getElementById("chgmts_situationeco").value
    if (chgmts_situationeco_var == "oui") {
        document.getElementById("inser_situationeco").style.display = "block";
        document.getElementById("activitepro").style.display = "block";
    } else {
        document.getElementById("inser_situationeco").style.display = "none";
    }
}

/* Si demande d'appui au démarage = oui */
function appdemarage_ask_fc() {
    var appdemarage_ask_var = document.getElementById("appdemarage_ask").value
    if (appdemarage_ask_var == "oui") {
        document.getElementById("appui").style.display = "block";
    } else {
        document.getElementById("appui").style.display = "none";
    }
}


/* Si accord à appui au démarage alors champs motif accord */
function appdemarage_answerask_fc() {
    var appdemarage_answerask_var = document.getElementById("appdemarage_answerask").value
    var a = document.getElementsByClassName("appdemarage_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (appdemarage_answerask_var == "oui") {
        document.getElementById("appdemarage_accord").style.display = "block";
        document.getElementById("appdemarage_autre").style.display = "block";
        document.getElementById("appdemarage_montant").style.display = "flex";
    } else if (appdemarage_answerask_var == "non") {
        document.getElementById("appdemarage_refus").style.display = "block";
        document.getElementById("appdemarage_autre").style.display = "block";
    } else {
        document.getElementById("appdemarage_accord").style.display = "none";
        document.getElementById("appdemarage_refus").style.display = "none";
        document.getElementById("appdemarage_autre").style.display = "none";
    }
}


/* En fonction du type de diagnostique : liste d'actions à mener */
function diagnosticbesoin_fc() {
    var diagnosticbesoin_var = document.getElementById("diagnosticbesoin").value
    var a = document.getElementsByClassName("diagnosticbesoin_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (diagnosticbesoin_var == "adefinir") {
        document.getElementById("adefinir").style.display = "block";
        document.getElementById("diagnosticbesoin_observation").style.display = "block";
    } else if (diagnosticbesoin_var == "information") {
        document.getElementById("information").style.display = "block";
        document.getElementById("diagnosticbesoin_observation").style.display = "block";
    } else if (diagnosticbesoin_var == "maitrise") {
        document.getElementById("maitrise").style.display = "block";
        document.getElementById("diagnosticbesoin_observation").style.display = "block";
    } else if (diagnosticbesoin_var == "valorisation") {
        document.getElementById("valorisation").style.display = "block";
        document.getElementById("diagnosticbesoin_observation").style.display = "block";
    } else if (diagnosticbesoin_var == "finsuivi") {
        document.getElementById("diagnosticbesoin_observation").style.display = "block";
    }
}


/* Affiche champs en fonction du type d'intervention dans formulaire, choix insertion */
function insertiontype_fc() {
    var insertiontype_var = document.getElementById("insertiontype").value
    var a = document.getElementsByClassName("insertiontype_int_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (insertiontype_var == "inser_entretien") {
        document.getElementById("inser_firstentretien_champ").style.display = "inline";
        document.getElementById("inser_entretien").style.display = "block";
    } else if (insertiontype_var == "inser_acc") {
        document.getElementById("inser_acc").style.display = "block";
    } else if (insertiontype_var == "inser_cv") {
        document.getElementById("inser_cv").style.display = "block";
    }
}


/* Si premier entretien "Recherche emploi" alors demandes de champs supplémentaires */
function inser_firstentretien_ask_fc() {
    var checkBox = document.getElementById("inser_firstentretien_ask");
    if (checkBox.checked == true) {
        document.getElementById("inser_info_firstentretien").style.display = "block";
        document.getElementById("inser_situationeco").style.display = "block";
        document.getElementById("chgmts_situationeco_btn").style.display = "none";
    } else {
        document.getElementById("inser_info_firstentretien").style.display = "none";
        document.getElementById("chgmts_situationeco_btn").style.display = "block";
    }
}


/* En fonction type de lieu de visite dans formulaire insertion, choix insertion, affiche champ pour nom structure */
function typevisite_insertion_fc() {
    var typevisite_insertion_var = document.getElementById("typevisite_insertion").value
    if (typevisite_insertion_var == "structure_inser") {
        document.getElementById("structure_inserdomaine").style.display = "block";
    }
}


/* Si type cv est choix "autre", affiche champ informations complémentaires */
function typecv_fc() {
    var typecv_var = document.getElementById("typecv").value
    if (typecv_var == "autre") {
        document.getElementById("typecv_autre").style.display = "block";
    }
}


/* En fonction du type d'étape dans tpp, affiche champs  */
function tpptype_fc() {
    var tpptype_var = document.getElementById("tpptype").value
    var a = document.getElementsByClassName("tpptype_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (tpptype_var == "tpp_information") {
        document.getElementById("tpp_information").style.display = "block";
    } else if (tpptype_var == "tpp_complement") {
        document.getElementById("tpp_complement").style.display = "block";
    } else if (tpptype_var == "tpp_edl") {
        document.getElementById("tpp_edl").style.display = "block";
    } else if (tpptype_var == "tpp_approfondissement") {
        document.getElementById("tpp_approfondissement").style.display = "block";
    } else if (tpptype_var == "tpp_notification") {
        document.getElementById("tpp_notification").style.display = "block";
    } else if (tpptype_var == "tpp_achat") {
        document.getElementById("tpp_achat").style.display = "block";
    } else if (tpptype_var == "tpp_lancement") {
        document.getElementById("tpp_lancement").style.display = "block";
    } else if (tpptype_var == "tpp_suivi") {
        document.getElementById("tpp_suivi").style.display = "block";
    } else if (tpptype_var == "tpp_evaluation") {
        document.getElementById("tpp_evaluation").style.display = "block";
    }
}

/* Si poursuite projet = non, alors demande motif */
function tppsuite_fc() {
    var tppsuite_var = document.getElementById("tppsuite").value
    if (tppsuite_var == "non") {
        document.getElementById("tppsuite_motif").style.display = "block";
    }

    /* Si experience en lien avec le projet TPP : alors champ */
    function tppbefore_fc() {
        var tppbefore_var = document.getElementById("tppbefore").value
        if (tppbefore_var == "oui") {
            document.getElementById("tppbefore_exp").style.display = "block";
        }
    }
}

function tppsuite_accord_fc() {
    var tppsuite_accord_var = document.getElementById("tppsuite_accord").value
    if (tppsuite_accord_var == "non") {
        document.getElementById("tppsuite_accord_motif").style.display = "block";
    }
}



/* --------------- Formulaires psy (form_psy) -----------------*/
/* Si motif de visite, = accompagneteur, alors champs collaboration, si champ "autre", alors champ*/
function psyvisite_motif_fc() {
    var psyvisite_motif_var = document.getElementById("psyvisite_motif").value
    var a = document.getElementsByClassName("psyvisite_motifhide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (psyvisite_motif_var == "accompagnateur") {
        document.getElementById("psyvisite_motifcolab").style.display = "block";
    } else if (psyvisite_motif_var == "autre") {
        document.getElementById("psyvisite_motifchamp").style.display = "block";
    }
}

/* Si lieu accompagnement, = association, alors champs association, si champ "autre", alors champ*/
function psyacc_lieu_fc() {
    var psyacc_lieu_var = document.getElementById("psyacc_lieu").value
    var a = document.getElementsByClassName("psyacc_lieuhide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (psyacc_lieu_var == "association") {
        document.getElementById("psyacc_associationchamp").style.display = "block";
    } else if (psyacc_lieu_var == "autre") {
        document.getElementById("psyacc_lieuchamp").style.display = "block";
    }
}







/* --------------- Formulaires atliers de groupe (form_group) -----------------*/


function atelier_type_fc() {
    var atelier_type_var = document.getElementById("atelier_type").value
    var a = document.getElementsByClassName("atelier_typehide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (atelier_type_var == "accueil") {
        document.getElementById("accueilatelier_type_arttherapie").style.display = "block";
    } else if (atelier_type_var == "insertion") {
        document.getElementById("insertionatelier").style.display = "block";
    } else if (atelier_type_var == "psy") {
        document.getElementById("psyatelier").style.display = "block";
    } else if (atelier_type_var == "sante") {
        document.getElementById("santeatelier").style.display = "block";
    }
}




/* Group Psy : Affiche type d'atelier (h1) + formulaire et validation formulaire en fonction sélection*/
function psyatelier_type_fc() {
    var psyatelier_type_var = document.getElementById("psyatelier_type").value
    var a = document.getElementsByClassName("psyatelier_typehide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (psyatelier_type_var == "arttherapie") {
        document.getElementById("psyatelier_case").style.display = "block";
        document.getElementById("psyatelier_type_arttherapie").style.display = "block";
        document.getElementById("psyatelier_typeart").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (psyatelier_type_var == "mediation") {
        document.getElementById("psyatelier_case").style.display = "block";
        document.getElementById("psyatelier_type_mediation").style.display = "block";
        document.getElementById("psyatelier_typeart").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (psyatelier_type_var == "parole") {
        document.getElementById("psyatelier_case").style.display = "block";
        document.getElementById("psyatelier_type_parole").style.display = "block";
        document.getElementById("psyatelier_typegroup").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (psyatelier_type_var == "sensibilisation") {
        document.getElementById("psyatelier_case").style.display = "block";
        document.getElementById("psyatelier_type_sensibilisation").style.display = "block";
        document.getElementById("psyatelier_typegroup").style.display = "block";
        document.getElementById("validform").style.display = "block";
    }
}

/* Group Insertion : Affiche type d'atelier (h1) + formulaire et validation formulaire en fonction sélection*/
function insertionatelier_type_fc() {
    var insertionatelier_type_var = document.getElementById("insertionatelier_type").value
    var a = document.getElementsByClassName("insertionatelier_typehide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (insertionatelier_type_var == "emploi") {
        document.getElementById("insertionatelier_case").style.display = "block";
        document.getElementById("insertionatelier_type_emploi").style.display = "block";
        document.getElementById("insertionatelier_infoemploi").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (insertionatelier_type_var == "entreprenariat") {
        document.getElementById("insertionatelier_case").style.display = "block";
        document.getElementById("insertionatelier_type_entreprenariat").style.display = "block";
        document.getElementById("insertionatelier_infoemploi").style.display = "block";
        document.getElementById("validform").style.display = "block";
    } else if (insertionatelier_type_var == "evaluation") {
        document.getElementById("insertionatelier_case").style.display = "block";
        document.getElementById("insertionatelier_type_evaluation").style.display = "block";
        document.getElementById("validform").style.display = "block";
    }
}


/* (psy) Si lieu atelier est "Hors centre" alors apparition champ */
function psyatelier_lieu_fc() {
    var psyatelier_lieu_var = document.getElementById("psyatelier_lieu").value
    if (psyatelier_lieu_var == "nocentre") {
        document.getElementById("psyatelier_lieuchamp").style.display = "block";
    } else {
        document.getElementById("psyatelier_lieuchamp").style.display = "none";
    }
}


/* (insertion) Si lieu atelier est "Hors centre" alors apparition champ */
function insertionatelier_lieu_fc() {
    var insertionatelier_lieu_var = document.getElementById("insertionatelier_lieu").value
    if (insertionatelier_lieu_var == "nocentre") {
        document.getElementById("insertionatelier_lieuchamp").style.display = "block";
    } else {
        document.getElementById("insertionatelier_lieuchamp").style.display = "none";
    }
}


/* Si "Type d'activité" = "autre", alors apaprition champ */
function psyatelier_typeactivte_fc() {
    var psyatelier_typeactivte_var = document.getElementById("psyatelier_typeactivte").value
    if (psyatelier_typeactivte_var == "autre") {
        document.getElementById("psyatelier_typeactivitechamp").style.display = "block";
    } else {
        document.getElementById("psyatelier_typeactivitechamp").style.display = "none";
    }
}


/* (insertion) Si "Type d'activité" = "autre", alors apaprition champ */
function insertionatelier_typeactivte_fc() {
    var insertionatelier_typeactivte_var = document.getElementById("insertionatelier_typeactivte").value
    if (insertionatelier_typeactivte_var == "autre") {
        document.getElementById("insertionatelier_typeactivitechamp").style.display = "block";
    } else {
        document.getElementById("insertionatelier_typeactivitechamp").style.display = "none";
    }
}


/* (santé) Si lieu atelier est "Hors centre" alors apparition champ */
function santeatelier_lieu_fc() {
    var santeatelier_lieu_var = document.getElementById("santeatelier_lieu").value
    if (santeatelier_lieu_var == "nocentre") {
        document.getElementById("santeatelier_lieuchamp").style.display = "block";
    } else {
        document.getElementById("santeatelier_lieuchamp").style.display = "none";
    }
}




/* --------------- Formulaires santé (form_sante) -----------------*/
/* Si accompagnement à faire = oui */
function accompagnement_afaire_fc() {
    var accompagnement_afaire_var = document.getElementById("accompagnement_afaire").value
    if (accompagnement_afaire_var == "oui") {
        document.getElementById("suiviafaire").style.display = "block";
    } else {
        document.getElementById("suiviafaire").style.display = "none";
    }
}

function accsante_motif_fc() {
    var accsante_motif_var = document.getElementById("accsante_motif").value
    if (accsante_motif_var == "12") {
        document.getElementById("accsante_motif_actes").style.display = "block";
    } else {
        document.getElementById("accsante_motif_actes").style.display = "none";
    }
}


function produit_sante_fc() {
    var produit_sante_var = document.getElementById("produit_sante").value
    var a = document.getElementsByClassName("produit_sante_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (produit_sante_var == "medicament") {
        document.getElementById("produit_sante_medicament").style.display = "block";
        document.getElementById("produit_sante_title").style.display = "block";
    } else if (produit_sante_var == "analyse") {
        document.getElementById("produit_sante_analyse").style.display = "block";
        document.getElementById("produit_sante_title").style.display = "block";
    } else if (produit_sante_var == "imagerie") {
        document.getElementById("produit_sante_imagerie").style.display = "block";
        document.getElementById("produit_sante_title").style.display = "block";
    }
}

/* --------------- Formulaires mena (form_mena) -----------------*/
/* Apparition champs en fonction des motifs de départ */
function motifdepart_fc() {
    var motifdepart_var = document.getElementById("motifdepart").value
    var a = document.getElementsByClassName("motifdepart_hide");
    for (i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }
    if (motifdepart_var == "economique") {
        document.getElementById("motif_economique").style.display = "block";
    } else if (motifdepart_var == "politique") {
        document.getElementById("motif_politique").style.display = "block";
    } else if (motifdepart_var == "famille") {
        document.getElementById("motif_famille").style.display = "block";
    } else if (motifdepart_var == "lgbti") {
        document.getElementById("motif_lgbti").style.display = "block";
    } else if (motifdepart_var == "foot") {
        document.getElementById("motif_foot").style.display = "block";
    } else if (motifdepart_var == "traite") {
        document.getElementById("motif_traite").style.display = "block";
    } else if (motifdepart_var == "autre") {
        document.getElementById("motif_autre").style.display = "block";
    }
}


/* Si séparation membres de la famille sur la route = oui */
function separation_famille_fc() {
    var separation_famille_var = document.getElementById("separation_famille").value
    if (separation_famille_var == "oui") {
        document.getElementById("separation_famille_details").style.display = "block";
    } else {
        document.getElementById("separation_famille_details").style.display = "none";
    }
}


/* Si mort de membres de la famille sur la route = oui */
function mortfamille_route_fc() {
    var mortfamille_route_var = document.getElementById("mortfamille_route").value
    if (mortfamille_route_var == "oui") {
        document.getElementById("mortfamille_route_details").style.display = "block";
    } else {
        document.getElementById("mortfamille_route_details").style.display = "none";
    }
}


/* Si maladie = oui */
function mena_maladie_ask_fc() {
    var mena_maladie_ask_var = document.getElementById("mena_maladie_ask").value
    if (mena_maladie_ask_var == "oui") {
        document.getElementById("mena_maladie_info").style.display = "block";
        document.getElementById("mena_maladie_date").style.display = "block";
    } else {
        document.getElementById("mena_maladie_info").style.display = "none";
        document.getElementById("mena_maladie_date").style.display = "none";
    }
}


/* Si drogues = oui */
function mena_drogues_ask_fc() {
    var mena_drogues_ask_var = document.getElementById("mena_drogues_ask").value
    if (mena_drogues_ask_var == "oui") {
        document.getElementById("mena_drogues_info").style.display = "block";
    } else {
        document.getElementById("mena_drogues_info").style.display = "none";
    }
}


/* Si maladie = oui */
function mena_maladiemaroc_ask_fc() {
    var mena_maladiemaroc_ask_var = document.getElementById("mena_maladiemaroc_ask").value
    if (mena_maladiemaroc_ask_var == "oui") {
        document.getElementById("mena_maladiemaroc_causes").style.display = "block";
        document.getElementById("mena_maladiemaroc_info").style.display = "block";
    } else {
        document.getElementById("mena_maladiemaroc_causes").style.display = "none";
        document.getElementById("mena_maladiemaroc_info").style.display = "none";
    }
}


/* Si mst = oui */
function mena_mst_ask_fc() {
    var mena_mst_ask_var = document.getElementById("mena_mst_ask").value
    if (mena_mst_ask_var == "") {
        document.getElementById("mena_mst_origine").style.display = "none";
        document.getElementById("mena_mst_info").style.display = "none";
    } else {
        document.getElementById("mena_mst_origine").style.display = "block";
        document.getElementById("mena_mst_info").style.display = "block";
    }
}


/* Si maladie contagieuse = oui */
function mena_contagieuse_ask_fc() {
    var mena_contagieuse_ask_var = document.getElementById("mena_contagieuse_ask").value
    if (mena_contagieuse_ask_var == "") {
        document.getElementById("mena_contagieuse_info").style.display = "none";
    } else {
        document.getElementById("mena_contagieuse_info").style.display = "block";
    }
}
