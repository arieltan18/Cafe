CREATE TABLE contactus (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
salutation VARCHAR(3) NOT NULL,
name VARCHAR(30) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(12),
enquiry VARCHAR(10) NOT NULL,
subject VARCHAR(200) NOT NULL,
message VARCHAR(2000) NOT NULL
);	

CREATE TABLE cake (
id INT  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cakeType VARCHAR(50) NOT NULL,
image VARCHAR(200) NOT NULL,
description VARCHAR(500)NOT NULL
);

INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Apple Cheese Slice','Cheese Cake','/cafe/images/cake/AppleCheeseSlice.jpg',
	'Light baked cheese with apple pie filling on a special biscuit base. ');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Black Forest Cheese','Cheese Cake','/cafe/images/cake/BlackForestCheese.jpg',
	'A refreshing twist to the traditional blackforest cake. Light cheese 
	layered with crunchy dark chocolate and dark sweet cherry filling in the middle.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Blueberry Cheese','Cheese Cake','/cafe/images/cake/BlueberryCheese.jpg',
	'Baked cheese topped with blueberries.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Cappuccino Cheese','Cheese Cake','/cafe/images/cake/CappuccinoCheese.jpg',
	'A blend of coffee cheese and vanilla cheese with coffee cookies base.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Cheese','Cheese Cake','/cafe/images/cake/ChocolateCheese.jpg',
	'Smooth baked cheese combined with imported chocolate and cream. ');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Green Tea Cheese Cake','Cheese Cake','/cafe/images/cake/GreenTeaCheeseCake.jpg',
	'Pretty and healthy, green tea is sure to brighten the flavour of cheesecake!');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Oreo Cheese','Cheese Cake','/cafe/images/cake/OreoCheese.jpg',
	'Frozen cream cheese with loads of crushed oreo biscuits. ');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Strawberry','Fresh Cream Cake','/cafe/images/cake/ChocolateStrawberry.jpg',
	'Layers of cocoa sponge sandwiched with fresh cream and strawberries, coated with
	rich chocolate and decorated with strawberry toppings. ');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Banana','Fresh Cream Cake','/cafe/images/cake/ChocolateBanana.jpg',
	'Extremely addictive. Loads of banana slices on a bed of chocolate cream with chocolate 
	cake and coated with melted home-made chocolate.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Chip Walnut','Fresh Cream Cake','/cafe/images/cake/ChocolateChipWalnut.jpg',
	'Four layers of chocolate cake with fresh chocolate cream, choc chips and Californian walnuts.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Fudge','Fresh Cream Cake','/cafe/images/cake/ChocolateFudge.jpg',
	'For the die-hard chocoholic. Filled with smooth creamy chocolate fudge.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Indulgence','Fresh Cream Cake','/cafe/images/cake/ChocolateIndulgence.jpg',
	'Creamy and rich Belgian coverture chocolate and white chocolate filling. Absolutely a luscious, 
	luxurious, sinfully rich chocolate lovers dream.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Chocolate Mud Cake','Fresh Cream Cake','/cafe/images/cake/ChocolateMudCake.jpg',
	'Filled with semi-sweet and smooth creamy chocolate fudge.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Classic Tiramisu','Fresh Cream Cake','/cafe/images/cake/ClassicTiramisu.jpg',
	'Luxurious sponge fingers immersed with espresso, cream and mascarpone, elevates the traditional tiramisu to a rich treat!');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Hazelnut Cream Cake','Fresh Cream Cake','/cafe/images/cake/HazelnutCreamCake.jpg',
	'Rich hazelnut cream within dark cocoa sponge, topped with crushed hazelnuts for a nutty finish.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('American Brownies','Brownies','/cafe/images/cake/AmericanBrownies.jpg',
	'Combination of rich chocolate and pistachio nuts.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Brownies Walnut','Brownies','/cafe/images/cake/BrowniesWalnut.jpg',
	'Our very own soft brownies temptingly topped with melted chocolate and walnuts.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Carrot Slice','Brownies','/cafe/images/cake/CarrotSlice.jpg',
	'Filled with grated carrots, walnuts and raisins, topped with cheese.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Hi Fibre Cream Cheese','Health Cake','/cafe/images/cake/HiFibreCreamCheese.jpg',
	'Creamy cheese cake that is light but satisfying with hi-fibre grains, seeds and nuts toppings.');
INSERT INTO cake(name,cakeType,image,description) 
VALUES ('Trans Fat Free Peach Cake','Health Cake','/cafe/images/cake/TransFatFreePeachCreamCake.jpg',
	'A fresh and light cake with peach pieces and apricot filling through layers of sugar-free sponges. ');


	
CREATE TABLE chocolateDrinks (
id INT  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
image VARCHAR(100) NOT NULL,
description VARCHAR(300)NOT NULL
);
INSERT INTO chocolateDrinks(name,image,description) 
VALUES ('Chocolate Banana','/cafe/images/chocolate drinks/chocolate banana.jpg',
	'This great Chocolate Covered Banana recipe is made with Coconut Rum, Banana, Chocolate Syrup and Vanilla Ice Cream');
INSERT INTO chocolateDrinks(name,image,description) 
VALUES ('Chocolate Chip Caramel Frappe','/cafe/images/chocolate drinks/Chocolate-Chip-Caramel-Frappe.jpg',
	'An indulgent combination of rich mocha, sweet caramel and a hint of coffee, with added chocolate chips, all blended 
	to perfection. Topped with whipped cream plus a double drizzle of chocolate and caramel.');
INSERT INTO chocolateDrinks(name,image,description) 
VALUES ('Chocolate Covered Strawberry','/cafe/images/chocolate drinks/chocolate-covered-strawberry.jpg',
	'A delicious recipe for Chocolate Covered Strawberry, with strawberry liqueur, white creme de cacao and cream.');
INSERT INTO chocolateDrinks(name,image,description) 
VALUES ('Hot Chocolate Marshmallow','/cafe/images/chocolate drinks/Hot-Chocolate-mashmallow.jpg',
	'It’s a creamy homemade hot chocolate with toasted marshmallows dissolved right into the drink itself.');
INSERT INTO chocolateDrinks(name,image,description) 
VALUES ('Hot Chocolate','/cafe/images/chocolate drinks/hot-chocolate.jpg',
	'Made with chocolate mocha sauce, peppermint-flavored syrup and steamed milk topped with sweetened whipped cream and 
	dark chocolate curls.');
	
CREATE TABLE coffeeTea (
id INT  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
type VARCHAR(10) NOT NULL,
image VARCHAR(100) NOT NULL,
description VARCHAR(300)NOT NULL
);
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Cafe Cappuccino','Coffee','/cafe/images/coffee&Tea/HotCafeCappucinno-375x375.jpg',
	'Dark, rich espresso lies in wait under a smoothed and stretched layer of thick foam. It is truly the height of our baristas craft.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Cafe Latte','Coffee','/cafe/images/coffee&Tea/HotCafeLatte-375x375.jpg',
	'Our dark, rich espresso balanced with steamed milk and a light layer of foam. A perfect milk forward warm up.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Caramel Macchiato','Coffee','/cafe/images/coffee&Tea/HotCaramelMacchiato-375x375.jpg',
	'Freshly steamed milk with vanilla-flavored syrup is marked with espresso and topped with caramel drizzle for an oh-so-sweet finish.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Flat White','Coffee','/cafe/images/coffee&Tea/HotFlatWhite-375x375.jpg',
	'A flat white is a coffee beverage originating from Australia and New Zealand. It is prepared by pouring microfoam 
	(steamed milk from the bottom of a pitcher) over a single or double shot of espresso.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Mocha','Coffee','/cafe/images/coffee&Tea/Espresso-375x375.jpg',
	'A full-flavored, concentrated form of coffee that is served in “shots.”');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Espresso','Coffee','/cafe/images/coffee&Tea/CafeAmericano-375x375.jpg',
	'Rich, full-bodied espresso with hot water in true European style.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Iced Cafe Cappuccino','Coffee','/cafe/images/coffee&Tea/IcedCafeCappucinno-375x375.jpg',
	'Dark, rich espresso lies in wait under a smoothed and stretched layer of thick foam. It is truly the height of our baristas craft.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Iced Caramel Macchiato','Coffee','/cafe/images/coffee&Tea/IcedCaramelMacchiato-375x375.jpg',
	'Freshly steamed milk with vanilla-flavored syrup is marked with espresso and topped with caramel drizzle for an oh-so-sweet finish.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Iced Latte','Coffee','/cafe/images/coffee&Tea/IcedLatte-375x375.jpg',
	'Our dark, rich espresso balanced with steamed milk and a light layer of foam. A perfect milk forward warm up.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Iced Cafe Americano','Coffee','/cafe/images/coffee&Tea/IcedCafeAmericano-375x375.jpg',
	'Rich, full-bodied espresso with hot water in true European style.Served with ice.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Green tea latte','Coffee','/cafe/images/coffee&Tea/GreenTeaLatte-375x375.jpg',
	'Smooth and creamy matcha is lightly sweetened and served with steamed milk. A perfect zen.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Black tea','Tea','/cafe/images/coffee&Tea/HotBlackTea-375x375.jpg',
	'A full-bodied black tea infused with malty and oaky undertones.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Green Tea','Tea','/cafe/images/coffee&Tea/HotGreenTea-375x375.jpg',
	'Green tea is made from Camellia sinensis leaves that have not undergone the same withering and oxidation applied when processing 
	Camellia sinensis into oolong tea and black tea.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Hot Teh Tarik','Tea','/cafe/images/coffee&Tea/HotTehTarik-375x375.jpg',
	'Teh tarik (literally "pulled tea") is a hot milk tea beverage which can be commonly found in restaurants, outdoor stalls and 
	kopitiams within the Southeast Asian countries of Malaysia and Singapore.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Iced Black Tea','Tea','/cafe/images/coffee&Tea/IcedBlackTea-375x375.jpg',
	'A full-bodied black tea infused with malty and oaky undertones.Served with ice.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Ice Lemon Tea','Tea','/cafe/images/coffee&Tea/IcedLemonTea-375x375.jpg',
	'Tea sweetened with real cane sugar, mixed with refreshing lemonade and hand-shaken with ice. This delightfully refreshing handcrafted
	treat pairs perfectly with a sunny afternoon and a porch swing.');
INSERT INTO coffeeTea(name,type,image,description) 
VALUES ('Iced Teh Tarik','Tea','/cafe/images/coffee&Tea/IcedTehTarik-375x375.jpg',
	'Teh tarik (literally "pulled tea") is a hot milk tea beverage which can be commonly found in restaurants, outdoor stalls and 
	kopitiams within the Southeast Asian countries of Malaysia and Singapore.');

CREATE TABLE juice (
id INT  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
image VARCHAR(100) NOT NULL,
description VARCHAR(300)NOT NULL
);
INSERT INTO juice(name,image,description) 
VALUES ('Raw Juice','/cafe/images/juice/juices-raw.jpg',
	'Pure Raw Juice makes eating HEALTHY fast, fresh and accessible to the Baltimore area.
Our delicious juice blends and smoothies are made from the freshest local & organic produce and blended to perfection.');
INSERT INTO juice(name,image,description) 
VALUES ('Super Green Juice','/cafe/images/juice/juices-super-green.jpg',
	'Great healthy drink for detoxing after the holidays or whenever you have overdone it. Worth it to buy the organic celery, even if you buy conventional for everything else. 
Adjust fruit and veggie amounts to suit your personal taste.');
INSERT INTO juice(name,image,description) 
VALUES ('Fruit Juice','/cafe/images/juice/juices-fruit-juice.jpg',
	'Fruit fruit is as healthy as eating a piece of raw fruit out of your hand. Unlike many people think there is not a whole lot of fruit flesh lost when you squeeze fruit. This means that your glass of juice does contain all the fibers you need! ');
INSERT INTO juice(name,image,description) 
VALUES ('Clean Green Juice','/cafe/images/juice/juices-clean-green.jpg',
	'This light and refreshing green juice is a great way to make your liver happy!  Cabbage contains sulfur based compounds and other phytonutrients that can promote natural
detoxification in the liver. ');
INSERT INTO juice(name,image,description) 
VALUES ('Blueberry Spice Juice','/cafe/images/juice/juices-blueberry-spice.jpg',
	'These juices for weight loss are nutritious, quite satisfying and have special characteristics that sweep away toxins and fat.Use these juices for weight loss in your diet plans or incorporate them into your daily lifestyle.');
INSERT INTO juice(name,image,description) 
VALUES ('Tropical Juice','/cafe/images/juice/juices-tropical.jpg',
	'Tropical Fruit is made with the juice of 100% pure squeezed fruit, picked at the peak of ripeness. 
Just one 150ml glass gives you one of your five a day and has enough vitamin C to help support the
 normal function of the immune system and help reduce feelings of tiredness.');
INSERT INTO juice(name,image,description) 
VALUES ('Orange Juice','/cafe/images/juice/juices-orange.jpg',
	'Freshly squeezed orange juice is a nutrition powerhouse with naturally occurring vitamins and minerals and many antioxidants.');
INSERT INTO juice(name,image,description) 
VALUES ('Carrot Juice','/cafe/images/juice/juices-carrot.jpg',
	'Fresh squeezed carrot juice is a nutrient-dense beverage, high in vitamins and minerals for each calorie it provides.');
	
	
	
	
	
	
	
	