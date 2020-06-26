<h2 class="right__title">Nous contacter</h2>

<!--
La balise form englobe tous les champs de saisie à envoyer
mais aussi
- à quelle URL les envoyer => attribut action
- selon quelle méthode HTTP => attribut method

HTTP GET => va ajouter les données dans l'URL (Query String => ?name=value&name2=value2)
HTTP POST => chaque donnée sera envoyée de façon cachée, dans l'entête HTTP

(une page peut contenir plusieurs formulaires)
-->
<form action="contact_form_dest.php" method="post" class="contact-form">
    <div class="contact-form__row">
        <div>
        <!-- Les input type radio permettent de sélectionner 1 des éléments proposés
        ils sont liés les uns aux autres grâce à la attribut name -->
        <input type="radio" name="gender" id="genderMrs" value="madame">
        <label for="genderMrs">Mme</label> /
        <input type="radio" name="gender" id="genderMr" value="monsieur">
        <label for="genderMr">M</label>
        </div>
        <input type="text" name="firstname" placeholder="Prénom" value="" class="contact-form__item" required>
        <input type="text" name="lastname" placeholder="Nom" value="" class="contact-form__item" required>
    </div>
    <div class="contact-form__row">
        <input type="email" name="email" placeholder="Adresse e-mail" class="contact-form__item">
    </div>
    <div class="contact-form__row contact-form__row--bottom">
        <label for="source" class="contact-form__label">J'ai connu ce site grâce à</label>
    <select name="source" id="source" class="contact-form__item">
        <option value="">choisir</option>
        <option value="fb">Facebook</option>
        <option value="twitter">Twitter</option>
        <option value="google">Google</option>
        <option value="bouche-a-oreilles">Bouche à oreilles</option>
        <option value="jpp">JT de 13h de Jean-Pierre Pernault</option>
        <option value="autre">Autre</option>
    </select>
    </div>
    <div class="contact-form__row">
        <label for="message" class="contact-form__label">Pour laisser un commentaire libre à propos d'O'clock c'est par ici :</label>
    </div>
    <div class="contact-form__row contact-form__row--bottom">
        <textarea name="message" id="message" placeholder="Votre message" class="contact-form__item contact-form__item--textarea "></textarea>
    </div>
    <div class="contact-form__row contact-form__row--bottom">
        <input type="checkbox" name="infos-ok" id="infos-ok" class="contact-form__item contact-form__item--checkbox">
        <label for="infos-ok">Je certifie la véracité de ces informations</label>
    </div>
    <div class="contact-form__row contact-form__row--bottom">
        <label for="fileUpload">Ajouter un fichier :</label>&nbsp;
        <input type="file" name="fileUpload" id="fileUpload">
    </div>
    <button class="contact-form__submit">Envoyer</button>
    <!--
        Juste une autre façon de faire un bouton submit
        <input type="submit" value="Envoyer" class="contact-form__submit">
    -->
</form>