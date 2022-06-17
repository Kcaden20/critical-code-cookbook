<section class="svg-container "aria-hidden="true">
<?php $svgSel; $cusSel; 
switch ($svgSel) {
    // ABOUT SVG
    case page('about')->title() :?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20 350 350" fill="none" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><ellipse cx="151.46" cy="76.83" rx="118.81" ry="16.68"/><ellipse cx="151.46" cy="152.32" rx="118.81" ry="16.68"/><ellipse cx="151.46" cy="221.45" rx="118.81" ry="16.68"/><ellipse cx="151.46" cy="153.46" rx="149.4" ry="151.17"/></svg>
    <?php 
    // DOWNLOADS SVG
    break; case page('downloads')->title(): ?>
    <?php 
    // CONTRIBUTIONS SVG
    break; case page('contributions')->title(): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20 350 350" fill="none" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><ellipse cx="150" cy="225.88" rx="150" ry="79.8"/><ellipse cx="150" cy="194.49" rx="150" ry="79.8"/><ellipse cx="150" cy="157.51" rx="150" ry="79.8"/><ellipse cx="150" cy="124.97" rx="150" ry="79.8"/><ellipse cx="150" cy="82.12" rx="150" ry="79.8"/></svg>    
    <?php 
    // RESOURCES SVG
    break; case page('resources')->title(): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><g fill="none"><ellipse cx="146.75" cy="91.41" rx="45.56" ry="85.14"/><ellipse cx="213.26" cy="103.04" rx="85.14" ry="45.56" transform="matrix(.707107 -.707107 .707107 .707107 -10.4 180.98)"/><ellipse cx="213.26" cy="191.34" rx="45.56" ry="85.14" transform="matrix(.707107 -.707107 .707107 .707107 -72.84 206.84)"/><ellipse cx="146.75" cy="211.97" rx="45.56" ry="85.14"/><ellipse cx="78.46" cy="191.34" rx="85.14" ry="45.56" transform="matrix(.707107 -.707107 .707107 .707107 -112.32 111.52)"/><ellipse cx="78.46" cy="103.04" rx="45.56" ry="85.14" transform="matrix(.707107 -.707107 .707107 .707107 -49.88 85.66)"/></g></svg>
    <?php 
    // PROJECT SVG
    break; case "paper": ?>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" fill="none" stroke="" stroke-width="8" xmlns:v="https://vecta.io/nano"><ellipse cx="150.94" cy="149.65" rx="105.3" ry="105.19"></ellipse><ellipse cx="153.81" cy="65.93" rx="51.65" ry="63.81"></ellipse><ellipse cx="149.85" cy="149.65" rx="51.65" ry="63.81"></ellipse><ellipse cx="256.36" cy="148.61" rx="51.65" ry="63.81"></ellipse><ellipse cx="149.27" cy="240.82" rx="51.65" ry="63.81"></ellipse><ellipse cx="46.73" cy="156.04" rx="51.65" ry="63.81"></ellipse></svg>

    <?php 
    // ACTIVITY SVG
    break; case "create":
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" fill="none" stroke="#231f20" xmlns:v="https://vecta.io/nano"><g stroke-miterlimit="10" stroke-width="8"><rect width="300" height="304.63" rx="150"/><rect x="21.12" y="21.45" width="257.76" height="261.74" rx="128.88"/></g><ellipse cx="150" cy="149.66" rx="35.42" ry="150.34" stroke-width="8"/><path d="M-.52,155.45c0-19.56,67.86-35.42,151.56-35.42s151.56,15.86,151.56,35.42-67.86,35.42-151.56,35.42c-83.71,0-151.56-15.86-151.56-35.42Z" stroke-miterlimit="10" stroke-width="8"/></svg>
    <?php 
    // CASE STUDY SVG
    break; case "sun":
    ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" fill="none" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><circle cx="151.4" cy="152.32" r="145.69"/><ellipse cx="151.4" cy="152.32" rx="20.81" ry="22"/><ellipse cx="151.4" cy="152.32" rx="54.41" ry="57.51"/><ellipse cx="151.4" cy="152.32" rx="118.35" ry="125.1"/></svg>
    <!-- ANY -->
    <?php break;
    case "any":
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" fill="none" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><ellipse cx="150" cy="150" rx="106.68" ry="145.69"/><ellipse cx="151" cy="150" rx="68.6" ry="145.69"/><ellipse cx="152" cy="150" rx="33.41" ry="145.69"/><ellipse cx="153" cy="150" rx="16.9" ry="145.69"/><ellipse cx="154" cy="150" rx="145.69" ry="16.9"/><ellipse cx="154" cy="151" rx="145.69" ry="16.9"/></svg>
    <!-- P5JS -->
    <?php break;
    case "five":
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" fill="none" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><ellipse cx="154.53" cy="233.64" rx="129.61" ry="63.47"/><ellipse cx="153.09" cy="148.84" rx="39.05" ry="158.47" transform="matrix(.574577 -.818451 .818451 .574577 -56.69 188.6)"/><circle cx="54.05" cy="53.59" r="39.05"/><circle cx="245.1" cy="233.64" r="39.05"/><circle cx="67.2" cy="233.22" r="39.05"/><ellipse cx="155.39" cy="33.37" rx="129.61" ry="33.37"/></svg>
    <!-- PYTHON -->
    <?php break;
    case "snake":
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 -20  350 350" fill="none" stroke="#231f20" stroke-width="8" xmlns:v="https://vecta.io/nano"><ellipse cx="154.53" cy="63.47" rx="129.61" ry="63.47"/><ellipse cx="153.09" cy="148.28" rx="158.47" ry="39.05" transform="matrix(.818451 -.574577 .574577 .818451 -57.4 114.9)"/><circle cx="54.05" cy="243.53" r="39.05"/><circle cx="245.1" cy="63.47" r="39.05"/><circle cx="67.2" cy="63.9" r="39.05"/><ellipse cx="155.39" cy="263.75" rx="129.61" ry="33.37"/></svg>
    <?php break;
    case "custom":
       $cusSel->kt()
    ?>
<?php break;
    } ?>
    </section>