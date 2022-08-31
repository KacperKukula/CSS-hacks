//Flag Is Switched:
//false --> day
//true --> night

//COOOOOKIES!!!
let IsSwitched = document.cookie[document.cookie.indexOf("IsSwitched")+11]
IsSwitched = (IsSwitched==(-1)||IsSwitched=='N') ? 0 : IsSwitched; //if cookie doesn't exist
SwitchStyle()

//Listener for userSWITCH 
document.querySelector(".switch").addEventListener("mousedown", ()=>{
    IsSwitched = !IsSwitched
    SwitchStyle()
}) 

//////////////////////////////////////////
//Function that change theme
/////////////////////////////////////////
function SwitchStyle() {

    //Prefix 4 boolean IsSwitched <-- how 0 can be "true"??? (maybe 0 is string)
    if(IsSwitched==0) IsSwitched = false
    else IsSwitched = true

    let styleBody = document.body.style
    let styleMenu = document.querySelector(".menu").style
    let styleMainHeader = document.querySelector(".logo-text").style
    let styleSwitchContainer = document.querySelector(".switch-container").style
    let styleSunIcon = document.querySelector(".sun").style
    let styleHalfCircle = document.querySelector(".halfCircle").style
    let styleExpandIcon = document.querySelector(".expand-icon").style
    let styleDisplay = document.querySelector("article.display").style
    let styleMenuList = document.querySelector(".menu-list").style

    let SwitchElement = document.querySelector(".switch").style
    let SwitchBall = document.querySelector(".switch-ball").style

    let styleMenuCell = document.querySelectorAll(".menu > ul > li")
    let stylea = document.querySelectorAll("a")


    if(IsSwitched) {
        styleBody.background = "#1a1a1a"
        styleBody.color = "#cccccc"
        styleMenu.border = "none"
        //styleMainHeader.backgroundClip = "text"
        //styleMainHeader.background = "linear-gradient(346deg, rgba(19,109,238,1) 0%, rgba(157,0,128,1) 100%)"
        styleDisplay.borderLeft = "2px solid #121212"
        styleDisplay.color = "white"
        styleMenuList.listStyle = "circle"
        
        //Style 4 switch, dark theme
        SwitchElement.background = "linear-gradient(346deg, rgba(13,50,77,1) 0%, rgba(127,90,131,1) 100%)"
        SwitchBall.transform = "translateX(22px)"
        styleSwitchContainer.background = "#1a1a1a"
        styleSunIcon.fill = "#f5f5f5"
        styleHalfCircle.fill = "#1a1a1a"
        styleExpandIcon.fill = "white"
        
        //Style 4 menu and items inside
        stylea.forEach(link => {
            link.style.color = "white"
            link.style.paddingTop = "5px"
            link.style.paddingBottom = "5px"
            link.addEventListener("mouseover", ()=> {
                link.style.color = "yellow"
            })
            link.addEventListener("mouseout", ()=> {
                link.style.color = "white"
            })
        })
    }
    else {
        //Style 4 elements, light theme
        styleBody.background = "white"
        styleBody.color = "black"
        styleMenu.borderRight = "2px solid #ededed"
        //styleMainHeader.backgroundClip = "text"
        //styleMainHeader.background = "linear-gradient(346deg, rgba(19,109,238,1) 0%, rgba(157,0,128,1) 100%)"
        styleDisplay.borderLeft = "none"
        styleDisplay.color = "black"
        styleMenuList.listStyle = "none"
        
        //Style 4 switch, light theme
        SwitchElement.background = "linear-gradient(346deg, rgba(170,202,239,1) 0%, rgba(253,231,249,1) 100%)"
        SwitchBall.transform = "translateX(0)"
        styleSwitchContainer.background = "rgb(253, 253, 253)"
        styleSunIcon.fill = "black"
        styleHalfCircle.fill = "rgb(253, 253, 253)"
        styleExpandIcon.fill = "black"
        
        //Style 4 menu and items inside
        stylea.forEach(link => {
            link.style.color = "black"
            link.style.paddingTop = "5px"
            link.style.paddingBottom = "5px"
            link.removeEventListener("mouseover", ()=> {
                link.style.color = "yellow"
            })
            link.removeEventListener("mouseout", ()=> {
                link.style.color = "white"
            })
        })
        
    }
    //Setting cookie
    document.cookie = `IsSwitched=${+IsSwitched}`
}