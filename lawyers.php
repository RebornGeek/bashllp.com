<?php
include('assets/php/page-template.php');

function head(){

    addMeta("title", "Our Team of Lawyers");
    addMeta("keywords", "Barristers, Solicitors, Law, Lawyers, attorneys, Toronto, Ontario Canada, Areas of law, corporate, real estate, hospitality, leisure, litigation, immigration, securities, employment, family, estate, international trade");
    addMeta("description", "We provide legal services and are experts in the following areas of law: corporate, civil litigation, immigration, securities, estates, and real estate law.");

} function content(){ ?>

    <h1>Our Team of Lawyers</h1>

    <div class="lawyer-block">
        <img src="/assets/images/lawyers/baldwin.jpg" alt="Baldwin" class="lawyer img-responsive" />
        <h3>Thomas C.H. Baldwin, Q.C.</h3>
        <p>Called to the Ontario Bar, 1970<br>Appointed Queen's Counsel, 1984</p>
        <p>Tom Baldwin's general corporate, commercial and securities practice encompasses the banking, loan, trust and securities</p>
        <p><a href="">Read More...</a></p>
        <div class="clear"></div>
    </div>

    <div class="lawyer-block">
        <img src="/assets/images/lawyers/sennecke.jpg" alt="Sennecke" class="lawyer img-responsive" />
        <h3>Alexander Sennecke</h3>
        <p>Called to the Ontario Bar, 1987.</p>
        <p>Alexander has 20 years experience representing German speaking clients doing business in Ontario with a special focus on German-Canadian cross border corpor</p>
        <p><a href="">Read More...</a></p>
        <div class="clear"></div>
    </div>

    <div class="lawyer-block">
        <img src="/assets/images/lawyers/halman.jpg" alt="Halman" class="lawyer img-responsive" />
        <h3>Jeffrey Halman</h3>
        <p>Called to the Ontario Bar, 1987.</p>
        <p>Jeff Halman specializes in all aspects of real estate law, including: buying, selling and financing commercial, residential and hospitality industry propert</p>
        <p><a href="">Read More...</a></p>
        <div class="clear"></div>
    </div>

<?php } ?>