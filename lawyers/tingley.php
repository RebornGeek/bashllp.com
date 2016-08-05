<?php
include($_SERVER['DOCUMENT_ROOT'].'/assets/php/page-template.php');

function head(){

    addMeta("title", "Evan L. Tingley");
    addMeta("keywords", "Barristers, Solicitors, Law, Lawyers, attorneys, Toronto, Ontario Canada, Areas of law, corporate, real estate, hospitality, leisure, litigation, immigration, securities, employment, family, estate, international trade");
    addMeta("description", "We provide legal services and are experts in the following areas of law: corporate, civil litigation, immigration, securities, estates, and real estate law.");

} function content(){ ?>

    <h1>Our Team of Lawyers</h1>
    
    <div class="bio-left">
        <img src="/assets/images/lawyers/tingley.jpg" alt="Tingley" class="img-responsive" />

        <div class="bio-contact">
            <h4>Telephone</h4>
            <p>416.601.1852</p>

            <h4>Facsimile</h4>
            <p>416.601.0655</p>

            <h4>Email</h4>
            <a href="mailto:etingley@bashllp.com">etingley@bashllp.com</a>
        </div>

        <div class="clear"></div>
    </div>
    
    <div class="bio">
        <h3>Evan L. Tingley - Partner</h3>
        <p>Called to the Ontario Bar, 1995.</p>
        <p>Evan Tingley practices exclusively in the area of civil and commercial litigation. His practice includes all manner of real estate litigation, wrongful dismissal actions, wrongful competition proceedings, debt collection remedies and partner and shareholder disputes.</p>
        <p>He regularly appears on examinations for discovery, mediations, motions, trials and appeals in the Superior Court of Justice and the Court of Appeal for Ontario.</p>
        
        <h4>Education</h4>
        <ul>
            <li>LL.B., Dalhousie University, 1993 </li>
            <li>B.A. (Hons.), Mount Allison University, 1990</li>
        </ul>
    </div>
    
<?php } ?>