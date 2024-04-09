<section id="menuTop">
    <nav class="menu">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><img src="img/apprentispassages_logo_renard.png" alt="Apprentis Pas Sages"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" rel="menuqsn">Qui sommes-nous ?</a></li>
                <li><a href="#" rel="menud">Découvrir</a></li>
                <li><a href="#" rel="menue">Explorer</a></li>
                <li><a href="#"><i class="material-icons">search</i> Search</a></li>
                <li><a href="#">Adhérer</a></li>
                <li><a href="#"><i class="material-icons">mail_outline</i> Contact</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Qui sommes-nous ?</a></li>
        <li><a href="#">Découvrir</a></li>
        <li><a href="#">Explorer</a></li>
        <li><a href="#"><i class="material-icons">search</i> Search</a></li>
        <li><a href="#">Adhérer</a></li>
        <li><a href="#"><i class="material-icons">mail_outline</i> Contact</a></li>
    </ul>

    <section id="menuqsn" class="sousmenu">
        <ul>
            <li><a href="#">L'association</a></li>
            <li><a href="#">Trombinoscope</a></li>
        </ul>
    </section>
    <section id="menud" class="sousmenu">
        <ul>
            <li><a href="#">Nos prestations</a></li>
            <li><a href="#">Evénements</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="#">Albums photos</a></li>
            <li><a href="#">Témoignages</a></li>
        </ul>
    </section>
    <section id="menue" class="sousmenu">
        <h5>Nos coups de coeurs</h5>
        <ul>
            <li><a href="#">Sciences</a></li>
            <li><a href="#">Art et littérature</a></li>
            <li><a href="#">Ludique</a></li>
            <li><a href="#">Histoire</a></li>
            <li><a href="#">Divers</a></li>
        </ul>
    </section>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var options = {}
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);

        document.querySelectorAll("a[rel]").forEach(elt => {
            elt.addEventListener("click", (e) => {
                var rel = "#" + e.target.rel
                var display = false;
                if (!document.querySelector(rel).classList.contains("active")) {
                    display = true;
                }
                document.querySelectorAll("a[rel]").forEach(elt => {
                    var relDelete = "#" + elt.rel
                    document.querySelector(relDelete).classList.remove("active");
                });

                // console.log(e.target.rel);
                if (display) {
                    document.querySelector(rel).classList.add("active");

                }

            })
        });
    });

    // // Or with jQuery

    // $(document).ready(function() {
    //     $('.sidenav').sidenav();
    // });
</script>