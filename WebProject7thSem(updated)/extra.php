<!--<div class="services">
         <div class="service">
            <h2>PORTRAITS</h2>
             <p>Pixel Hut aims at capturing the beautiful moments through the lenses of a camera...The portraits captured, are one of the people's favourite...</p>
             <img src="PH2.jpg" width="277">
         </div>
        
         <div class="service">
            <h2>EVENTS</h2>
             <p>The club is an official partner of Vidyuth, the annual fest of VVCE.The three day event is well captured by budding photographers of the club...</p>
             <img src="PH3.jpg" width="277">
         </div>
           
        
         <div class="service">
            <h2>SHORT MOVIES</h2>
             <p>Not much experienced, but the recent ad shoots of college; short movies and videography has ensured it lives upto the person's expectations...</p>
             <video width="277" height="185" controls="">
               <source src="PHV.mp4" type="PHV/mp4">
             </video>
         </div>
           </div>-->

<!-- <div class="columns">
           
            <section>
               <center><h2>PHOTO WALK</h2></center>
                <p>Mysore Dasara, being the centre of epitome tends to bring a plethora of creative ideas among the young and budding photographers. Photo Walk, which is an annual event conducted by the club, ensures that these photography enthusiasts get the apt skillset and knowledge about various techniques in photography which foster their innovative mindset into the proper direction. Low light photography, framing techniques et cetera are a few concepts covered during this walk...</p>
              <img src="PH4.jpg" width="438" height="250">
               </section>
               <aside>
                   <center><h2>ROADTRIP</h2></center>
                   <p>The club believes that the nature can teach a lot of things pertaining to photography. It helps in freshening one's mind and our members call it, stressbuster!! Keeping this in mind, another important event of the club is the Roadtrip, which aims mostly at capturing the natural beauty; from birds to waterfalls to hills...Amalgamating the roadtrip with smoke bombs and other elements of photography gives the captures, a pulchritudinous aura.</p>
                   <img src="PH5.jpg" width="438" height="250">
               </aside>
           </div>-->

.wrapper 
{
    background: #2B7A78;
    max-width: 950px;
    margin: 0 auto;
    padding: 20px;
    z-index: 0;
}

.wrapper:after
{
    content: "";
    display: block;
    clear: both;
}

.services{
    max-height: 350px;
    overflow: hidden;
}
.services:after
{
    content: "";
    display: block;
    clear: both;
}

.services h2,service p
{
    color: #3AAFA9;
    margin: 10px 0;
    text-align: center;
}

.service
{
    float: left;
    background: #eee;
    width: 29.33%;
    margin: 1%;
    padding: 1%;
    height: 500px;
    position: relative;
    text-align: justify;
}

.service:nth-child(1)
{
    top:5px;
}

.service:nth-child(2)
{
    top:5px;
}

.service:nth-child(3)
{
    top:5px;
}

section,aside
{
    float: left;
    width: 46%;
    padding: 1%;
    margin: 1%;
    background: #f2f2f2;
}
.columns:after
{
    display: block;
    content: "";
    clear: both;
}
.columns
{
    color: #3a4660;
    text-align: justify;
}
#banner
{
	max-height:300px;
	overflow:hidden;
	margin:3%;
	position:relative;
    z-index: 0;
}


#banner h2{
	position:absolute;
	top:300px;
	width:100%;
	margin:0;
	text-align:center;
	color:#000;
}