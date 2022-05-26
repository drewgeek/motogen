let itemContents=[
    {image:"assets/Engine/FORD-EDGE-2008-09-10-FROM-N650,000-Copy.png",
        name:"FORD EDGE"},
    {image:"assets/Engine/FORD-EXPLORER-2012-16-FROM-N790,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"FORD EXPLORER"},
    {image:"assets/Engine/HONDA-ACCORD-2003-6-FROM-N360,000-Copy.png",
        name:"HONDA ACCORD"},
    {image:"assets/Engine/LANDROVER-EVOGUE-2.0-TURBO-11-12-13-14-15-16-17-FROM-N2,500,000.png",
        name:"LANDROVER EVOGUE"},
    {image:"assets/Engine/LEXUS-ES350,RX350HIGHLANDER,AVALON,CAMRY-V6,SIENNA-2GR-FROM-N595,000.png",
        name:"LEXUS ES350"},
    {image:"assets/Engine/MERCEDES-BENZ-E350-2009-10-11-12-FROM-N770,000.png",
        name:"MERCEDES BENZ"},
    {image:"assets/Engine/RANGE-DISCOVERY4,RANGE-SPORT,VOROVER-SPORT-2010.png",
        name:"RANGE DISCOVERY4"},
    {image:"assets/Engine/TOYOTA-COROLLA-2ZR-2007-08-09-10-11-12-13-14-15-FROM-N395,000.png",
        name:"TOYOTA COROLLA"},
]

let content=""

itemContents.map((val,ind)=>{

    return(
        content+= `<ul>
            <li class="image-container"> <a href="https://motongen.com/contact"><img src=${val.image} alt=""/></a></li>
            <li class="item-name">${val.name}</li>
            </ul>
        `
    )
})

let displaydiv=document.getElementById('list')
displaydiv.innerHTML=content

let fourthitemContents=[
    {image:"assets/Engine/TOYOTA-HILUX-COASTER-HIACE-2007-TO-2021-FROM-1,800,000.jpg",
        name:"TOYOTA HILUX",
        price:"N1,800,000"},

    {image:"assets/Engine/TOYOTA-SIENNA-HIGHLANDER-2003-7-ENGIN-3MZ-FROM-N490,000.png",
        name:"TOYOTA SIENNA ",
        price:"N490,000"},

    {image:"assets/Engine/LEXUS-IS250-IS350-2008-09-14-4GR-ENGINE-FROM-N530,000.jpg",
        name:"LEXUS-IS250-IS350",
        price:"N530,000"},

    {image:"assets/Engine/LEXUS-GX460-V8-1UR-2010-11-12-13-14-15-16-17-18-19-FROM-N2,400,000.png",
        name:"LEXUS-GX460-V8-1UR",
        price:"N2,400,000"},

    {image:"assets/Engine/LEXUS-HIGHLANDER-ES350-RX350-V6-GEARBOX-FROM-N680,000.jpg",
        name:"LEXUS HIGHLANDER",
        price:"N680,000"},

    {image:"assets/Engine/RANGE-ROVER-VOGUE-2014-15-16-17-18-FROM-N7,600,000.png",
        name:"RANGE ROVER ",
        price:"N7,600,000"},

    {image:"assets/Engine/AUDI-A4-A6,-CC-POLO-2.0-TSI-N790,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"AUDI A4 A6",
        price:"N790,000"},


    {image:"assets/Engine/FORD-EDGE-ENGINE-2006-09-FROM-N650,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"FORD EDGE 2006-09",
        price:"N650,000"},

    {image:"assets/Engine/FORD-EXPLORER-2012-16-FROM-N790,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"FORD EXPLORER 2012-16",
        price:"N790,000"},


    {image:"assets/Engine/HONDA-ACCORD-2003-V6-FROM-N360,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"HONDA ACCORD 2003 V6",
        price:"N360,000"},

    {image:"assets/Engine/HYUNDAI-SONATA-2011-17-N650,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"HYUNDAI SONATA 11-17",
        price:"N650,000"},

    {image:"assets/Engine/LAND-CRUISER-3UR-ENGINE-LEXUS-GX460-ENGINE-2010-TO-2020-N2,900,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"LAND CRUISER 3UR",
        price:"N2,900,000"},

    {image:"assets/Engine/LAND-ROVER-EVOGUE-2.0-TURBO-2011-18-N2,600,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"LAND ROVER EVOGUE 2.0",
        price:"N2,600,000"},

    {image:"assets/Engine/LAND-ROVER-VOGUE-HSE-FROM-2015-N8,200,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"LAND ROVER VOGUE HSE",
        price:"N8,200,000"},

    {image:"assets/Engine/LEXUS-ES350,RX350HIGHLANDER,AVALON,CAMRY-V6,SIENNA-2GR-FROM-N595,000.png",
        name:"LEXUS ES350",
        price:"N595,000"},

    {image:"assets/Engine/LEXUS-GX460-V8-1UR-2010-19-N2,800,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"LEXUS GX460 V8",
        price:"N2,800,000"},

    {image:"assets/Engine/LEXUS-GX460-V8-1UR-2010-11-12-13-14-15-16-17-18-19-FROM-N2,400,000.png",
        name:"Lexus GX460 V8",
        price:"N2,800,000"},

    {image:"assets/Engine/MERCEDES-BENZ-E350-2007-12-FROM-N770,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"MERCEDES BENZ E350",
        price:"N770,000"},

    {image:"assets/Engine/RANGE-ROVER-VOGUE-2014-18-FROM-N7,600,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"RANGE ROVERVOGUE",
        price:"N7,600,000"},

    {image:"assets/Engine/TACOMA-ENGINE-4.0-2007-2012-N1,700,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"TACOMA ENGINE",
        price:"N1,700,000"},

    {image:"assets/Engine/TOYOTA-4RUNNER-FJ-RUISER-ENGINE-1GR-2010-18-N1,950,000-6-MONTHS-GUARANTEE-(MIN).jpg",
        name:"TOYOTA 4RUNNER FJ",
        price:"N1,950,000"},

    {image:"assets/Engine/TOYOTA-CAMRY-2002-7-1ZZ-FROM-N390,000-3MONTHS-GUARANTEE-(MIN).png",
        name:"TOYOTA CAMRY",
        price:"N390,000"},

    {image:"assets/Engine/TOYOTA-CAMRY-ENGINE-2007-11-N390,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"TOYOTA CAMRY",
        price:"N390,000"},

    {image:"assets/Engine/TOYOTA-COROLLA-2ZR-2008-14-N560,000-6MONTHS-GUARANTEE-(MIN).png",
        name:"TOYOTA COROLLA",
        price:"N560,000"},

    {image:"assets/Engine/TOYOTA-HILUX-COASTER-HIACE-2007-18-N1,750,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"TOYOTA HILUX COASTER",
        price:"N1,750,000"},

    {image:"assets/Engine/TOYOTA-SIENNA-HIGHLANDER-2002-7-ENGINE-3MZ-N498,000-6-MONTHS-GUARANTEE-(MIN).png",
        name:"TOYOTA SIENNA",
        price:"N498,000"},

    {image:"assets/Gearbox/HONDA-ACCORD-GEARBOX-2003-07-N280,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"Honda Accord 03-07",
        price:"N280,000"},

    {image:"assets/Gearbox/TOYOTA-GEARBBOX-LANDCRUISER-2009-2015-N1,190,000.00-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"TOYOTA LANDCRUISER",
        price:"N1,190,000.00"},

    {image:"assets/Gearbox/TOYOTA-HIGHLANDER,-LEXUS-ES350,-RX350-V6-GEARBOX-N680,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"TOYOTA-HIGHLANDER",
        price:"N680,000"},

    {image:"assets/Gearbox/TOYOTA-SIENNA-2002-7-4WD-GEARBOX-N450,000-3MONTHS-GUARANTEE-(MIN).jpg",
        name:"Sienna 02-07",
        price:"N450,000"},

]
let fourthcontent=""

fourthitemContents.map((val,ind)=>{

    return(

        fourthcontent+= `<ul>
            <li class="fourthimage-container"> <a href="https://motongen.com/contact"><img src=${val.image} alt=""/></a></li>
            <li class="fourthitem-name only-name">${val.name}</li>
            <li class="fourthitem-name">Starting Price</li>
            <li class="fourthitem-price">${val.price}</li>
            </ul>
        `
    )


})

let fourthdisplaydiv=document.getElementById('fourth-inner-images')
fourthdisplaydiv.innerHTML=fourthcontent

function searchContent() {
    let input, filter, ul, i, txtValue;
    input = document.getElementById('search-input');
    filter = input.value.toUpperCase();

    let inner_images = document.getElementById("fourth-inner-images");
    ul = inner_images.getElementsByTagName('ul');

    for (i = 0; i < ul.length; i++) {
        let colNames = ul[i].getElementsByClassName('only-name')[0];
        txtValue = colNames.textContent || colNames.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            ul[i].style.display = "";
        } else {
            ul[i].style.display = "none";
        }
    }

    let innerFirstContent = document.getElementById('list');
    let ulList = innerFirstContent.getElementsByTagName('ul');
    for (i = 0; i < ulList.length; i++) {
        let colNames = ulList[i].getElementsByClassName('item-name')[0];
        let title = colNames.textContent || colNames.innerText;
        if (title.toUpperCase().indexOf(filter) > -1) {
            ulList[i].style.display = "";
        } else {
            ulList[i].style.display = "none";
        }
    }


}


let fifthitemContents=[
    {image:"assets/junkyardengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/installer.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/splash.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/engine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/rebuiltengine.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/splash.webp",
        name:"AIR INTAKEe"
    },
    {image:"assets/splash.webp",
        name:"AIR INTAKEe"
    },
]
let fifthcontent=""

fifthitemContents.map((val,ind)=>{

    return(

        fifthcontent+= `<ul>

        <li class="fifthimage-container"> <img src=${val.image} alt=""/></li>

        <li class="text">${val.name}</li>

        </ul>
        `

    )


})

let fifthdisplaydiv=document.getElementById('fifth-inner-images')
// fifthdisplaydiv.innerHTML=fifthcontent


// let arrowright=document.getElementById('arrow-right')
// arrowright.addEventListener('click',movefunc)
// let arrowleft=document.getElementById('arrow-lefts')
// arrowleft.addEventListener('click',moveleft)
// let initial=0
//     let amount=100
//     let scrollname=document.getElementById("fifth-section-inner")
//     function moveleft(){
//         if(initial!==0){

//             initial-=amount
//             fifthdisplaydiv.style.transform="translate(-" + initial + "px) "
//         }
//     }


function movefunc(){
    let right=scrollname.scrollWidth

    let wid=scrollname.clientWidth




    initial+=amount

    if(wid==right){


        fifthdisplaydiv.style.transform="translate(" + 0 + "px) "


        initial=0
    }
    else{next()}






}
function next(){
    let right=scrollname.scrollWidth

    let wid=scrollname.clientWidth




    initial+=amount
    if(wid<right){

        fifthdisplaydiv.style.transform="translate(-" + initial + "px) "
    }
}
let vehicle=document.getElementById("by-vehicle")
let part=document.getElementById("by-part")
let partdiv=document.getElementById("input-div")
let vehiclediv=document.getElementById("vehicle")
vehicle.addEventListener("click",open)
function open(){

    partdiv.style.display="none"
    vehiclediv.style.display="flex"
    vehicle.style.backgroundColor="var(--red)"
    part.style.color="black"
    part.style.backgroundColor="whitesmoke"
    vehicle.style.color="white"


}
part.addEventListener("click",partopen)
function partopen(){

    partdiv.style.display="flex"
    vehiclediv.style.display="none"
    vehicle.style.backgroundColor="whitesmoke"
    part.style.color="white"
    part.style.backgroundColor="var(--red)"
    vehicle.style.color="black"


}
let mobileoption=document.getElementById("mobile-option")
let mobileheader=document.getElementById("mobile-header")
mobileoption.addEventListener("click",mobileopen)

function mobileopen(){

    mobileheader.style.display="flex"
    document.getElementById('first-section-body-inner').style.marginTop="0vh"
    document.getElementById('mobile-cancel').style.display="flex"
    mobileoption.style.display="none"


}
let mobilecancel=document.getElementById("mobile-cancel")
mobilecancel.addEventListener("click",mobileclose)
function mobileclose(){
    mobileheader.style.display="none"
    document.getElementById('first-section-body-inner').style.marginTop="10vh"
    document.getElementById('mobile-cancel').style.display="none"
    mobileoption.style.display="flex"

}
