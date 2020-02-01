
CREATE TABLE IF NOT EXISTS irunaitem
 (id int primary key AUTO_INCREMENT, name text, category text, description text);
INSERT INTO `irunaitem` VALUES(NULL,'Antidote','Status','Cures poison.');
INSERT INTO `irunaitem` VALUES(NULL,'Chana Masala','Status','Cures poison and recovers 500 HP.');
INSERT INTO `irunaitem` VALUES(NULL,'Coagulant','Status','Cures bleed.');
INSERT INTO `irunaitem` VALUES(NULL,'Cure Paralysis','Status','Cures paralysis.');
INSERT INTO `irunaitem` VALUES(NULL,'Energy Herb','Status','Cures lethargy.');
INSERT INTO `irunaitem` VALUES(NULL,'Eye Drops','Status','Cures blind.');
INSERT INTO `irunaitem` VALUES(NULL,'Mapo Dofu','Status','Cures poison and burn at a fixed interval for 10min.');
INSERT INTO `irunaitem` VALUES(NULL,'Merry Sweets','Status','
Melee&Magic+5% to Boss for 1min.
Add Melee&Magic+5% to Boss during
Xmas event.');
INSERT INTO `irunaitem` VALUES(NULL,'Mikan Daifuku','Status','Recovers 1800MP. High chance to remove paralysis.');
INSERT INTO `irunaitem` VALUES(NULL,'Moist Dirt','Status','
You may be able to extinguish
small fire with it.');
INSERT INTO `irunaitem` VALUES(NULL,'Moss Manju','Status','Recovers 1800HP. Removes poison.');
INSERT INTO `irunaitem` VALUES(NULL,'Sirok','Status','About 10 minutes, it will release the firing at regular intervals');
INSERT INTO `irunaitem` VALUES(NULL,'Soybean Paste Soup','Status','
Cures poison and freeze at regular
intervals for 10min.');
INSERT INTO `irunaitem` VALUES(NULL,'Spice','Status','Cures poison and recovers 50 MP.');
INSERT INTO `irunaitem` VALUES(NULL,'Spinnen Vaccine','Status','Cures any status ailment at a fixed
interval for 1 min but MP becomes 0.');
INSERT INTO `irunaitem` VALUES(NULL,'Stimulant','Status','Cures dizzy.');
INSERT INTO `irunaitem` VALUES(NULL,'Super Vaccine','Status','
Cures poison and recovers HP
for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Tandoori Chicken','Status','Cures paralysis and burn at regular intervals for 10min.');
INSERT INTO `irunaitem` VALUES(NULL,'Tear of the Moon','Status','
Cures poison, paralysis, blind,
burn and freeze.');
INSERT INTO `irunaitem` VALUES(NULL,'Tranquilizer','Status','Recovers from horrified.');
INSERT INTO `irunaitem` VALUES(NULL,'Trial Vaccine','Status','
Cures paralysis at short
regular intervals for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Tvorog','Status','The HP and MP by 250 recovery, and release the firing state');
INSERT INTO `irunaitem` VALUES(NULL,'Unread Fortune','Status','
Open to read your fortune. Effect
is lost when a new day arrives');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Bleed)','Status','Cures bleed at regular
	intervals for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Blind)','Status','
Cures blind at regular
intervals for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Dizzy)','Status','Cures dizzy at regular
	intervals for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Fear)','Status','Cures fear at regular
	intervals for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Freeze)','Status','
Cures freeze at regular intervals
for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Lethargy)','Status','Cures lethargy at regular
	intervals for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Paral.)','Status','
Cures paralysis at regular intervals
for 5min.');
INSERT INTO `irunaitem` VALUES(NULL,'Vaccine (Poison)','Status','
Cures poison at regular intervals
for 5min.');
COMMIT;
