<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active,
    .accordion:hover {
        background-color: #ccc;
    }

    .accordion:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\2212";
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    </style>
</head>

<body>

    <button class="accordion">DEPARTMENT OF SAMHITA, SIDDHANTA & SANSKRIT (BASIC PRINCIPLE)</button>
    <div class="panel">
        <p>This Department deals with the study of Philosophical fundamental approach of Ayurveda. The
            name of the department itself suggests that it elaborates the basic concepts of diagnosis and
            treatment. The basic concepts if applied properly and in its authentic way, it leads to the
            absolute knowledge of disease; which is applied to the newer diseases, too.</p>
    </div>

    <button class="accordion">DEPARTMENT OF KRIYA-SHARIR (PHYSIOLOGY)</button>
    <div class="panel">
        <po>Kriya sharir is the basic subject of Ayurveda, which initiates learning of Ayurveda at primary level
            for the students of first BAMS. Kriya Sharir is involved in the study of scientific basic of
            Tridosha, Saptadhatu and Deha-Manasa-Prakriti. <br>
            Sharirkriya is the subject which deals with all the basic knowledge and siddhantas as well as
            clinical examination of normal individual. The scientific evaluation of Tridosha has great
            importance from the stand point of diagnosis and therapy. The etiopathogenesis of disease can not be
            explained unless Tridosha is objectively assessed.</po>
    </div>

    <button class="accordion">DEPARTMENT OF RACHANA SHARIR (ANATOMY)</button>
    <div class="panel">
        <p>The subject of Rachana Sharir includes study of Normal body structures as stated in Ayurvedic
            Samhita by the Acharyas along with the study of Modern Anatomy.
            The department is engaged in teaching and research of the fundamentals of Ayurvedic Anatomy Le.
            Marma Sharir, Indriya Sharir, Tantra Sharir, Sira Dhamni Srotas Sharir, Shavavichhedan (Cadeveric
            dissection) etc. <br>
            Rachana Sharir is an extremely dynamic and interesting subject to an inquisitive Practitioner and
            Researcher of Ayurveda. All the medical sciences require more or less basic knowledge of Rachana
            Sharir. Hence the study is indeed the most important of basic sciences of the life.</p>
    </div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    </script>

</body>

</html>