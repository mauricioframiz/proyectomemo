
<!DOCTYPE html>
<html>

<head>
    <title>Memorandum N° XXX</title>
</head>
<style>
    html {
        position: relative;
    }
    
    body,
    html {
        margin: 0px;
        padding: 0px;
        width: 21.6cm;
        height: 27.8cm;
        border: 0px solid #e0e0e0;
        position: relative;
    }
    
    .container {
        font-family: Helvetica;
        font-size: 15px;
    }
    
    .logo {
        width: 6.56cm;
        height: 3.28cm;
        margin-left: 0.5cm;
        margin-top: 0.5cm;
    }
    
    .titulo {
        margin-left: 8.6cm;
        font-weight: bold;
        font-size: 20px;
    }
    
    .date {
        margin-top: 0.3cm;
        margin-left: 11.6cm;
        font-weight: bold;
    }
    
    .de {
        margin-left: 3cm;
        margin-top: 0.5cm;
        margin-right: 3cm;
        padding: 0px;
    }
    
    .para {
        margin-left: 3cm;
        /*margin-top: 0.1cm;*/
        padding: 0px;
        margin-right: 3cm;
    }
    
    .cargo {
        margin-left: 3.9cm;
        /*margin-top: 0.1cm;*/
        padding: 0px;
        margin-right: 3cm;
    }
    
    .estimado {
        margin-left: 3cm;
        /*margin-top: 1cm;*/
    }
    
    .motivo {
        margin-left: 3cm;
        padding: 0cm;
    }
    
    .motivo li {
        list-style-type: none;
        margin-bottom: 1px;
        font-weight: bold;
    }
    
    .text-gray {
        color: #E0E0E0;
    }
    
    .textml13 {
        margin-left: 1.3cm;
    }
    
    .font12 {
        font-size: 12px
    }
    
    .pbody {
        margin-top: 0.5cm;
        text-indent: 1cm;
        margin-left: 3cm;
        margin-right: 3cm;
        text-align: justify;
        text-justify: auto;
    }
    
    .watermaker-footer {
        bottom: 10px;
        font-size: 12px;
        width: 100%;
        margin: 0px;
        padding: 0px;
    }
    
    .watermaker-footer p {
        margin: 5px;
    }
    
    .watermaker-footer .universidad {
        text-align: center;
        color: #E0E0E0;
    }
    
    .watermaker-footer .universidad p {
        margin: 5px;
    }
    
    .footer {
        font-size: 12px;
        margin-left: 3cm;
        margin-right: 3cm;
        padding: 0px;
    }
    
    .footer .qr-container {
        position: absolute;
    }
    
    .footer .qr-container svg {
        margin-left: 0px;
    }
    
    .footer .qr-container p {
        font-size: 10px;
    }
    
    .footer .firma-container {
        font-size: 12px;
        text-align: center;
    }
    
    .footer .firma-container img {
        width: 205px;
        height: 155px;
    }
    
    .firma .timbre-container {
        text-align: center;
        margin-left: 385px;
        position: absolute;
    }
    
    .footer .timbre-container img {
        width: 205px;
        height: 155px;
    }
    
    .footer .sigla {
        font-size: 10px;
    }
    
    .contador {
        font-size: 21pt;
        text-align: right;
    }
    
    .simbolo {
        font-size: 21pt;
        padding: 10px;
        width: 100px;
        height: 100px;
        border: 1px solid #e0e0e0;
        cursor: pointer;
    }
    
    #menos {
        margin-left: 10px;
    }
    
    @media print {
        .no-print {
            display: none;
        }
    }
    
    .cuenta_parrafo {
        margin-top: 10px;
        margin-left: 5px;
        font-size: 10pt;
        position: absolute;
    }
    
    .small {
        font-size: 9px;
    }
    
    .qr-container {
        text-align: center;
        position: relative;
        float: right;
        margin-top: 0.9cm;
        margin-right: 1.7cm;
    }
</style>

<body>
    <div class="container">
        <img class="logo" src="http://guiaweb.usach.cl/sites/default/files/resize/imago_univ_de_santiago_2016_2-480x240.jpg">
        <div class="qr-container">

        </div>
        <div class="header">
            <div class="titulo">MEMORANDUM N° 00</div>
            <div class="date">Santiago, 25 de Junio del 2019</div>
            <p class="de">
                <span style="margin-left: 1px; margin-right: 1px">DE</span>
                <span>:</span>
            </p>
            <p class="para">
                <span style="margin-left: 1px; margin-right: 1px; padding-right: 10px;">A</span>
                <span>:</span>
            </p>
            <p class="cargo"></p>

        </div>
        <ul class="motivo">

        </ul>
        <div class="pbody"></div>

        <div class="footer">
            <div class="firma">

                <div class="timbre-container">

                </div>
                <div class="firma-container">

                </div>

            </div>
            <div class="sigla">
                <p>siglas</p>
            </div>
            <div class="small">
                <p>Distribución:</p>

            </div>

        </div>
        <div class="watermaker-footer">
            <div class="universidad">
                <p>UNIVERSIDAD DE SANTIAGO DE CHILE. AVENIDA LIBERTADOR BERNARDO O'HIGGINS Nº 3363. ESTACIÓN CENTRAL.</p>
                <p>UNIDAD QUE CORRESPONDA</p>
                <p>Mesa central (+56-2) 2 718 00 00. SANTIAGO. CHILE.</p>
            </div>
        </div>
</body>

</html>