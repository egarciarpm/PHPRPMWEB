// JavaScript Document


window.onload= function(){
	
	var count = 0;
    
	var vtitle = [];
	vtitle[0] = "Getting Started";
	vtitle[1] = "RPM Overview";
    vtitle[2] = "Setting & Defaults";
    vtitle[3] = "Master Data";
    vtitle[4] = "Pre-Lotted vs Non-Lotted Auctions";
    vtitle[5] = "Setting Up An Auction";
    vtitle[6] = "Inventory Management";
    vtitle[7] = "Adding Lots To Pre-Lotted Auctions";
    vtitle[8] = "Assigning Photos to Pre-Lotted Auctions";
    vtitle[9] = "Absentee/Phone Bids";
    vtitle[10] = "Email Broadcasting";
    vtitle[11] = "Mailing Labels";
    vtitle[12] = "Web Marketing";
    vtitle[13] = "Audience Lot View";
    vtitle[14] = "Bidder Registration";
    vtitle[15] = "Bid Entry Pre-Lotted Auctions";
    vtitle[16] = "Bid Entry Non-Lotted Auctions";
    vtitle[17] = "Creating Invoices";
    vtitle[18] = "Pulling Reports";
    vtitle[19] = "Paying Consignors";
    vtitle[20] = "Custom Form Processing";
    vtitle[21] = "Expenses";
    vtitle[22] = "Auction Simulcasting";
    vtitle[23] = "Networking Computers";
    var vdes = [];
	vdes[0] = "You've just downloaded AuctionRPM and you don't know where to start? This video is an introduction to the rest of the video series and starts you off right!";
	vdes[1] = "The main menu is where all operations of AuctionRPM can be found. This video shows you the different features of the main menu and helps you get the feel of how to navigate through all the features of the program";
    vdes[2] = "How is it possible to make one program that can adapt to all the different styles of auctioneer? One of the more powerful features of AuctionRPM is the Settings And Defaults feature which makes this possible. Settings and defaults lets you shape how the program works.";
    vdes[3] = "Organization is the key to any business, and it is no different with a good piece of software. Master data is a single place where all lists of information in AuctionRPM can be found. Click on this video to see all the ways that you can maintain your valuable data in AuctionRPM.";
    vdes[4] = "Do you maintain records on your inventory for sale, thus making it possible to create a catalog that can be handed out? Or perhaps ... would the computer not know what is being sold until the very moment that it sells? This video discusses various approaches to an auction and shows how AuctionRPM can handle them all.";
    vdes[5] = "There's a first step for everything and when you are going to hold an auction, this is the first step. This video will show how to tell AuctionRPM about the auction that is to be held .... where it will be .... what taxes are to be charged, etc";
    vdes[6] = "Do you conduct pre-lotted auctions? If so, then there are even more options available to you! One of the more useful features of AuctionRPM is that you can use it to maintain a list of inventory that will be used in an auction someday. This inventory management feature allows you to keep track of all inventory in your warehouse wheather or not it is currently assigned to a lot in an auction. This video shows how";
    vdes[7] = "Are you an auctioneer that maintains a warehouse of inventory and now you need to assign that inventory to an auction? ... or ... do you just want to pre-catalog your auction?This video discusses how to pre-lot your auction which involves letting the computer know what is going to be sold before the day of the sale. The data you enter can be minimal, or exhaustive including photographs - you choose!";
    vdes[8] = "There are many ways to assign images to inventory that you have pre-lotted into an auction. These photos can then be used in catalogs, web pages, and even our presentation and projection screen called the 'Audience Lot View' screen (see a later video for more information on this feature).This video shows some of the ways that you can assign images to your inventory.";
    vdes[9] = "Left bids and phone bids can be a hassle if they aren't tracked well. However ... they can definitely be an enhancement to your business! This video shows how they are tracked in AuctionRPM so you can get the best out of them!";
    vdes[10] = "Do you want to send email to your buyers to let them know that an auction is coming up? AuctionRPM makes it easy! This video shows you how.";
    vdes[11] = "Sending out mailers is often a necessary part of your advance marketing. This AuctionRPM feature incorporates many important features that AuctionRPM provides.For instance ... did you know that you can tell AuctionRPM to print mailing labels only for the buyers that would be specifically interested in the inventory sold in THIS AUCTION? Yes! AuctionRPM can track the buying habits of the buyer and tailor your marketing accordingly!";
    vdes[12] = "What good is an auction if nobody knows about it? This video shows how you can produce catalogs for your pre-lotted auctions, and shows how these catalogs can be placed on your website.If this appeals to you, be sure to ask about our realtime online catalog system!";
    vdes[13] = "The audience lot view screen is a place where you can present the lots that are being sold during the course of the auction. Designed for a projector, the Audience lot view screen creates a VERY professional presentation to your buyers and lets them know exactly where you are in the course of the auction.";
    vdes[14] = "When bidders arrive they, of course, need to register for the auction. This video shows how the bidder registration process works. Keep in mind that this bidder regsitration process can be greatly streamlined with the use of our drivers license scanning ability.Also ... watch this video to see how you can keep track of how your bidders heard about the auction! This way you can see how well your advertising is working!";
    vdes[15] = "Bid entry for pre-lotted auctions is a pivotal position during the auction. The bid entry clerk needs to keep focused and must have all necessary data entry tools at their disposal. Watch this video to see how this is done easily in AuctionRPM.";
    vdes[16] = "As with pre-lotted auctions, the bid entry clerk in a non-lotted auction must stay concentrated on the task at hand, but even more so now since ALL information about the item being sold must be entered. A special screen unique to non-lotted auction bid entry has been developed for this and this video will show you how it is used.";
    vdes[17] = "The bidder is finished bidding and now wishes to check out. The process couldn't be easier and yet it has so many features to handle all situations. Watch this video to see how the invoicing system can help you to keep the lines short!Don't forget! We can run credit cards too! Ask us how.";
    vdes[18] = "What good would a computer program be if you had no reports? AuctionRPM actually has over 200 of them! From mailing labels, to consignment fee reports, to accounting reports, to catalogs, to reports that analyze your marketing, AuctionRPM gives you exactly what you need.";
    vdes[19] = "The auction is done. All buyers are invoiced. What is there left to do? That's right ... Paying the consignors. AuctionRPM takes the labor out of it! It calculates your share, and the consignor share, and it even can print the actual check for you! Watch how!";
    vdes[20] = "Many times there are forms that need to be filled out when an item is sold at auction.Take an auto auction for instance. In most cases, the department of motor vehicles for your state will require bills of sale (as well as any number of other forms) to be filled out. These bills of sale are typically specific to each state.The Custom Forms feature is a feature that allows you to design a custom form that is to be printed by AuctionRPM whenever it is needed. You can tell it to 'fill in the blanks' on the form with any information needed such as the name of the buyer, consignor or the description of the item sold. It can even be set to print automatically whenever an invoice is produced for a specific category of product! VERY powerful feature.";
    vdes[21] = "Selling a car and you need to charge title fees, doc fees, and the like? Selling equipment that you needed to pick up and you want to charge a 'pick up' charge to the consignor? Are the consignors in this auction sharing the expense of advertising proportionate to the amount that each consignor sells at this auction? AuctionRPM can handle it all. Watch this video to see how.";
    vdes[22] = "There are various services that allow for the simulcasting of an auction. AuctionRPM has the ability to prepare data files that these services need in order to perform their duties. This video will show you how.";
    vdes[23] = "While AuctionRPM Software is not in the business of maintaining networks remotely, this video will help network administrators to know how a network using AuctionRPM is to be configured.";
    
  
 
for(i = 0; i<vtitle.length; i++){

};
  

function DisplayTitle(c, d){
document.getElementById('videotitle').innerText = c;
document.getElementById('videodescription').innerText = d;

};



document.getElementById('0').onclick = function(){
		count = 0;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('1').onclick = function(){
		count = 1;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('2').onclick = function(){
		count = 2;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('3').onclick = function(){
		count = 3;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('4').onclick = function(){
		count = 4;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('5').onclick = function(){
		count = 5;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('6').onclick = function(){
		count = 6;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('7').onclick = function(){
		count = 7;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('8').onclick = function(){
		count = 8;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('9').onclick = function(){
		count = 9;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('10').onclick = function(){
		count = 10;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('11').onclick = function(){
		count = 11;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('12').onclick = function(){
		count = 12;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	
	document.getElementById('13').onclick = function(){
		count = 13;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('14').onclick = function(){
		count = 14;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('15').onclick = function(){
		count = 15;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('16').onclick = function(){
		count = 16;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('17').onclick = function(){
		count = 17;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('18').onclick = function(){
		count = 18;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('19').onclick = function(){
		count = 19;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('20').onclick = function(){
		count = 20;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('21').onclick = function(){
		count = 21;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('22').onclick = function(){
		count = 22;
		DisplayTitle(vtitle[count],vdes[count]);
	};
	document.getElementById('23').onclick = function(){
		count = 23;
		DisplayTitle(vtitle[count],vdes[count]);
	};



};