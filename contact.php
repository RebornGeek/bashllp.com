<?php
include($_SERVER['DOCUMENT_ROOT'].'/assets/php/page-template.php');

function head(){

    addMeta("title", "Baldwin Sennecke Halman LLP");
    addMeta("keywords", "Barristers, Solicitors, Law, Lawyers, attorneys, Toronto, Ontario Canada, Areas of law, corporate, real estate, hospitality, leisure, litigation, immigration, securities, employment, family, estate, international trade");
    addMeta("description", "We provide legal services and are experts in the following areas of law: corporate, civil litigation, immigration, securities, estates, and real estate law.");

} function content(){ ?>

    <div class="left half-width">
        <h1>Baldwin Sennecke Halman LLP</h1>
        
        <p>Barristers &amp; Solictiors</p>
        
        <table>
            <tr>
                <td>Address:</td>
                <td>
                    Victoria Tower<br>
                    25 Adelaide Street East, Suite 900<br>
                    Toronto<br>
                    ON<br>
                    M5C 3A1<br>
                    Canada<br>
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><a href="mailto:info@bashllp.com">info@bashllp.com</a></td>
            </tr>
            <tr>
                <td>Telephone:</td>
                <td>416.601.1040</td>
            </tr>
            <tr>
                <td>Fax:</td>
                <td>416.601.0655<br><a href="http://www.bashllp.com">http://www.bashllp.com</a></td>
            </tr>
        </table>
        
        <p>Download information as a <a href="/vcard.vcf">vCard</a></p>
    </div>
    
    <div class="left half-width">
        <h3 class="text-16 green">Map &amp; Directions</h3>
        <p>{phocamaps view=map|id=1}</p>
    </div>
    
<?php } ?>