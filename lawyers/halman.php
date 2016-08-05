<?php
include($_SERVER['DOCUMENT_ROOT'].'/assets/php/page-template.php');

function head(){

    addMeta("title", "Jeffrey Halman");
    addMeta("keywords", "Barristers, Solicitors, Law, Lawyers, attorneys, Toronto, Ontario Canada, Areas of law, corporate, real estate, hospitality, leisure, litigation, immigration, securities, employment, family, estate, international trade");
    addMeta("description", "We provide legal services and are experts in the following areas of law: corporate, civil litigation, immigration, securities, estates, and real estate law.");

} function content(){ ?>

    <h1>Our Team of Lawyers</h1>
    
    <div class="bio-left">
        <img src="/assets/images/lawyers/halman.jpg" alt="Halman" class="img-responsive" />
      
        <h4>Telephone</h4>
        <p>416.601.1036</p>
        
        <h4>Facsimile</h4>
        <p>416.601.0655</p>
        
        <h4>Email</h4>
        <a href="mailto:jhalman@bashllp.com">jhalman@bashllp.com</a>
    </div>
    
    <div class="bio">
        <h3>Jeffrey Halman - Partner</h3>
        <p>Called to the Ontario Bar, 1987.</p>
        <p>Jeff Halman specializes in all aspects of real estate law, including: buying, selling and financing commercial, residential and hospitality industry properties; residential subdivision and condominium development; real estate based syndications and limited partnerships; and commercial landlord and tenant matters.</p>
        <p>Jeff also maintains an active corporate and commercial practice involving the purchase and sale of businesses; incorporations and corporate maintenance; shareholder and partnership agreements; and entertainment law.</p>
        <p>Jeff also carries on a strong practice in estate planning and estate administration.</p>
        <p>Jeff is currently an instructor with the Ontario Bar Admission Course for the Real Estate Section and was the Legal Editor for the Corporate, Commercial and Real Estate chapters of the text, Legal Office Procedures (4th ed.-2000, c. 26-44 incl.), published by Owl Publishing.</p>
        
        <h4>Education</h4>
        <ul>
            <li>LL.B., Osgoode Hall Law School</li>
            <li>BA, York University</li>
        </ul>
        
        <h4>Professional Membership</h4>
        <ul>
            <li>Law Society of Upper Canada</li>
        </ul>
    </div>
    
<?php } ?>