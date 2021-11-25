<?php
$servername = "localhost";
$username = "root";
$password = "";/* Put your password */
$dbname = "weapons";/* Put your database name */

/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql=CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

$sql=CREATE TABLE `antitank` (
  `id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL,
  `place` varchar(30) NOT NULL,
  `calibre` varchar(30) NOT NULL,
  `cartridge` varchar(100) NOT NULL,
  `barrel` varchar(100) NOT NULL,
  `diameter` varchar(30) NOT NULL,
  `engine` varchar(60) NOT NULL,
  `ef_range` varchar(60) NOT NULL,
  `feed` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `antitank`
--

INSERT INTO `antitank` (`id`, `type`, `title`, `place`, `calibre`, `cartridge`, `barrel`, `diameter`, `engine`, `ef_range`, `feed`, `material`, `image`) VALUES
(1, 'Anti-Tank Missile System', '9K115-2 METIS-M', 'USA', '130 mm', '', '1080 mm', '', '', '1500 m', '1 Missile', 'Iron', 'explosives/ironrain_9k115-2-metism.jpg'),
(2, 'Automatic Grenade Launcher', 'AGS-17', 'Russia', '', '30x29 mm grenade', '290 mm', '', '', '800-1700 m', '29 Grenade Belt', 'Iron', 'explosives/ironrain_ags-17.jpg'),
(3, 'Anti-Tank Missile', 'BGM-71 TOW', 'USA', '152 mm', '', '1080 mm', '', '', '3000 m', '1 Missile', 'Iron', 'explosives/ironrain_bgm-71.jpg'),
(4, 'Anti-Tank Rocket Launcher', 'M79 OSA', 'Yugoslavia', '90 mm', '', '730 mm', '', '', '350-600 m', 'Single Shot', 'Iron', 'explosives/ironrain_m79-osa.jpg'),
(5, 'Revolver Grenade Launcher', 'MIKOR MGL', 'South Africa', '', '40x46 mm grenade', '300 mm', '', '', '400-800 m', '6-round Revolver-type Swing Out', 'Steel', 'explosives/ironrain_milkor.jpg'),
(6, 'Rocket-Proppeled Grenade Luncher', 'RPG-22', 'Russia', '', '72.5 mm', '785 mm', '', '', '150-200 m', 'Disposable', 'Steel', 'explosives/ironrain_rpg22.jpg'),
(7, 'Rocket-Proppeled Grenade Launcher', 'RPG-29 \"Vampir\"', 'Russia', '', 'PG-39V tandem rocket', '1000 mm', '', '', '500-800 m', 'Single Shot', 'Iron', 'explosives/ironrain_rpg29.jpg'),
(8, 'Rocket-Proppeled Grenade Launcher', 'RPG-7', 'Russia', '', '85 mm', '300 mm', '', '', '330 m', 'Single Shot', 'Steel', 'explosives/ironrain_rpg7.jpg'),
(9, 'Anti-Tank Grenade Launcher', 'SPG-9', 'Russia', '', '73 mm', '2110 mm', '', '', '1300-4500 m', 'Manually Breech-Loaded', 'Iron', 'explosives/ironrain_spg9.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `explosives`
--

$sql=CREATE TABLE `explosives` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `warhead` varchar(100) NOT NULL,
  `detonation` varchar(100) NOT NULL,
  `diameter` varchar(30) NOT NULL,
  `engine` varchar(100) NOT NULL,
  `ef_range` varchar(100) NOT NULL,
  `filling` varchar(100) NOT NULL,
  `feed` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `explosives`
--

INSERT INTO `explosives` (`id`, `type`, `title`, `place`, `warhead`, `detonation`, `diameter`, `engine`, `ef_range`, `filling`, `feed`, `material`, `image`) VALUES
(1, 'Anti-Personnel Hand Grenade', 'F1', 'Russia', '', '3.2-4.2 seconds; time delay fuse', '55 mm', '', '30-45 m', 'Trinitrotoluene', '', 'Steel', 'explosives/ironrain_f1-grenade.jpg'),
(2, 'Hand Grenade', 'RGD-5', 'Russia', '', '3.2-4.2 seconds; pyrothecnic delay fuse', '58 mm', '', '15-20 m', 'Trinitrotoluene', '', 'Steel', 'explosives/ironrain_rgd5.jpg'),
(3, 'Anti-Tank Grenade', 'RPG-43', 'Russia', '', '3.2-4.2 seconds; inertial impact fuze', '55 mm', '', '30-45 m', 'Trinitrotoluene', '', 'Metal', 'explosives/ironrain_rpg43.jpg'),
(4, 'Anti-Tank Guided Missile Launcher', '9K111 Fagot', 'Russia', 'High Explosive Anti-Tank (HEAT)', '', '120 mm', '', '70-2500 m', '', '1 missile', 'Steel', 'explosives/ironrain_9k11_fagot.jpg'),
(5, 'Man-Portable Surface-to-air Missile Launcher', '9K32 STRELA-2', 'Russia', 'Direct-Energy Blast Fragmentation', '', '72 mm', 'Infra-Red Homing System', '50-1500 m', '', '', 'Steel', 'explosives/ironrain_9k32-strela2.jpg'),
(6, 'Man-Portable Air-Defence System', 'PK38 IGLA', 'Russia', 'Explosive', '', '72 mm', 'Solid-Fuel Rocket Motor', '3500-6000 m', '', '', 'Steel', 'explosives/ironrain_9k39-igla.jpg'),
(7, 'Man-Portable Surface-to-air Missile', 'FIM-92 Stinger', 'USA', 'High Explosive Annular Blast Fragmentation', '', '70.1 mm', 'Solid-Fuel Rocket Motor', '3800-4800 m', '', '', 'Steel', 'explosives/ironrain_fim.jpg'),
(8, 'Man-Portable Surface-to-air Missile Launcher', 'FN-6', 'China', 'FRAG-HE High Explosive', '', '72 mm', 'Single Stage Solid Rocket Motor', '500-5500 m', '', '', 'Steel', 'explosives/ironrain_fn6.jpg'),
(9, 'Anti-Tank Missile', 'HJ-8', 'China', 'High Explosive Anti-Tank (HEAT)', '', '120 mm', 'Solid Fuel Rocket', '4000 m', '', '', 'Steel', 'explosives/ironrain_hj8.jpg'),
(10, 'Anti-Tank Missile', 'MILAN', 'France', 'Single or Tandem HEAT', '', '115 mm', 'Solid-Fuel Rocket', '3000 m', '', '', 'Steel', 'explosives/ironrain_milan.jpg'),
(11, 'Intercontinental Ballistic Missile', 'HWASONG 15', 'North Korea', 'Nuclear Weapon', '', '2400 mm', 'Liquid-Propellant Rocket', '4000 m', '', '', 'Metal', 'explosives/ironrain_hwasong.jpg'),
(12, 'Anti-Tank Missile', '9K113 Kornet', 'Russia', 'High Explosive Anti-Tank (HEAT)', '', '152 mm', 'Solid-Fuel Rocket', '100-5000 m', '', '', 'Steel', 'explosives/ironrain_pkornet.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `machineguns`
--

$sql=CREATE TABLE `machineguns` (
  `id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL,
  `place` varchar(60) NOT NULL,
  `cartridge` varchar(60) NOT NULL,
  `barrel` varchar(60) NOT NULL,
  `ef_range` varchar(60) NOT NULL,
  `feed` varchar(400) NOT NULL,
  `material` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `machineguns`
--

INSERT INTO `machineguns` (`id`, `type`, `title`, `place`, `cartridge`, `barrel`, `ef_range`, `feed`, `material`, `image`) VALUES
(1, 'Heavy Machine Gun', 'M2 Browing', 'USA', '50 BMG (12.7x99 mm)', '1143 mm', '1800 m', 'Belt fed (M2 or M9 links)', 'Steel', 'machine_guns/ironrain_browing.jpg'),
(2, 'Heavy Machine Gun', 'DSHK', 'Russia', '12.7x108 mm', '1070 mm', '2000 m', '50 round belt', 'Steel', 'machine_guns/ironrain_dshk.jpg'),
(3, 'Light Machine Gun', 'FN Minimi', 'Belgium', '7.62x51 mm NATO / 5.56x45 mm NATO', '465 mm', '300 - 1000 m', '100 or 200-round belt(contained in a 100-round or a 200-round soft pouch) / 200-round box / 30-round', 'Steel', 'machine_guns/ironrain_fn_minimi.jpg'),
(4, 'General-Purpose Machine Gun', 'Mauser Rheinmettal MG3', 'Germany', '7.62x51 mm', '565 mm', '200-1200 m', '50-round non-disintegrating DM1 belt/ 100-round disintegrating DM6/M13 belt', 'Iron', 'machine_guns/ironrain_mauser.jpg'),
(5, 'General-Purpose Machine Gun', 'Type 80', 'China', '7.62x54 mmR', '658 mm', '100 - 1500 m', 'Belts in 100/200/250 round boxes', 'Iron ', 'machine_guns/ironrain_norinco.jpg'),
(6, 'Heavy Machine Gun', 'NVS UTES', 'Russia', '12.7x108 mm', '1560 mm', '1500-2000 m', '50 round belt', 'Iron', 'machine_guns/ironrain_nsv.jpg'),
(7, 'General-Purpose Machine Gun', 'PKM Kalashnikov', 'Russia', '7.62x54 mmR', '605 mm', '1000 m', 'Non-disintegrating metal 50 round blts in 100 and 200/250 round ammunition boxes', 'Steel', 'machine_guns/ironrain_pkm.jpg'),
(8, 'Light Machine Gun', 'Degtyarev RPD', 'Russia', '7.62x39 mm Soviet', '521 mm', '100-1000 m', 'Belt fed, 100 round non-desintegrating belt', 'Steel', 'machine_guns/ironrain_rpd.jpg'),
(9, 'Light Machine Gun', 'RPK-74 Kalashnikov', 'Russia', '5.45x39 mm M74', '590 mm', '100-1000 m', '30/40-round Curved Magazine', 'Steel', 'machine_guns/ironrain_rpk.jpg'),
(10, 'Heavy Machine Gun', 'W85', 'China', '12.7x108 mm', '1016 mm', '1500-1600 m', 'Belt', 'Iron', 'machine_guns/ironrain_w85.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `meele_weapons`
--

$sql=CREATE TABLE `meele_weapons` (
  `id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `blade_lenght` int(11) NOT NULL,
  `steel` varchar(60) NOT NULL,
  `handle` varchar(60) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `meele_weapons`
--

INSERT INTO `meele_weapons` (`id`, `type`, `title`, `blade_lenght`, `steel`, `handle`, `image`) VALUES
(1, 'axe', 'Axe', 140, '1060', 'Hickory Wood', 'meleewep/ironrain_axe.jpg'),
(2, 'knife', 'KERSHAW SECRET AGENT BOOT KNIFE', 112, '8Cr13MoV', 'Reinforced Synthetic Polymer', 'meleewep/ironrain_boot_knifer.jpg'),
(3, 'knife', 'Cutter', 46, 'Aluminum', 'Aluminum', 'meleewep/ironrain_cutterr.jpg'),
(4, 'knife', 'KA-BAR US MARINE CORPS FIGHTING KNIFE', 178, '1095', 'Leather', 'meleewep/ironrain_ka_barr.jpg'),
(5, 'knife', 'United Cutlery UC2772 Expendables Kunai', 305, 'AUS-6 stainless', 'Nylon-wrapped', 'meleewep/ironrain_knivesr.jpg'),
(6, 'machete', 'CONDOR TOOL & KNIFE DISCORD MACHETE', 457, '3mm-1075 High Carbon Steel', 'Micarta', 'meleewep/ironrain_macetar.jpg'),
(7, 'knife', 'Meat Cutter', 152, 'X50crMoV15', 'Polypropylene', 'meleewep/ironrain_satarr.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `pistols`
--

$sql=CREATE TABLE `pistols` (
  `id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `place` varchar(60) NOT NULL,
  `calibre` decimal(10,2) NOT NULL,
  `cartridge` varchar(60) NOT NULL,
  `barrel` int(11) NOT NULL,
  `ef_range` varchar(300) NOT NULL,
  `feed` varchar(300) NOT NULL,
  `material` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `pistols`
--

INSERT INTO `pistols` (`id`, `type`, `title`, `place`, `calibre`, `cartridge`, `barrel`, `ef_range`, `feed`, `material`, `image`) VALUES
(1, 'Beretta', 'BERETTA M92 BLOWBACK', 'Italy', '6.08', '9x19 mm', 125, '50 m', 'Detachable Box Magazine', 'Steel + ABS', 'pistols/ironrain_beretta.jpg'),
(2, 'Browing', 'Browning Hi-Power', 'Belgium', '9.00', '7.65x21 mm', 119, '50 m', 'Detachable Box Magazine', 'Steel', 'pistols/ironrain_browing.jpg'),
(3, 'CZUB', 'CZ-75', 'Czechoslovakia', '9.00', '9x19 mm', 120, '50 m', 'Detachable Box Magazine', 'Steel', 'pistols/ironrain_cz75.jpg'),
(4, 'Glock', 'GLOCK 17 GEN 4 CO2 PISTOL', 'Austria', '4.50', '9x19 mm', 114, '50 m', 'Detachable Box Magazine', 'Steel', 'pistols/ironrain_glock17.jpg'),
(5, 'Glock', 'GLOCK 19', 'Austria', '9.00', '9x19 mm', 102, '50 m', 'Detachable Box Magazine', 'Steel', 'pistols/ironrain_glock19.jpg'),
(6, 'Tokarev', 'TT-30', 'Russia', '8.00', '7.62x25 mm', 194, '50 m', 'Detachable Box Magazine', 'Steel', 'pistols/ironrain_tt-30.jpg'),
(7, 'Walther', 'Walther P99', 'Germany', '9.00', '9x19 mm', 102, '50 m', 'Detachable Box Magazine', 'Steel and Polymer', 'pistols/ironrain_walther99.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `rifles`
--

$sql=CREATE TABLE `rifles` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `place` varchar(30) NOT NULL,
  `cartridge` varchar(60) NOT NULL,
  `barrel` varchar(30) NOT NULL,
  `ef_range` varchar(60) NOT NULL,
  `feed` varchar(200) NOT NULL,
  `material` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `rifles`
--

INSERT INTO `rifles` (`id`, `type`, `title`, `place`, `cartridge`, `barrel`, `ef_range`, `feed`, `material`, `image`) VALUES
(1, 'Assault Rifle', 'Kalashnikov AK-47', 'Russia', '7.62x39 mm', '415 mm', '350 m', '20/30-round Detachabale Box', 'Steel + Wood', 'rifles/ironrain_ak47.jpg'),
(2, 'Assault Rifle', 'AK-56 (Type 56)', 'China', '7.62x39 mm', '414 mm', '300 - 400 m', '20/30/40-round Detachabale Box Magazine', 'Steel + Wood', 'rifles/ironrain_ak56.jpg'),
(3, 'Assault Rifle', 'AK-63 (AMM)', 'Hungary', '7.62x39 mm', '415 mm', '500 m', '10/20/30/40-round Box Magazine', 'Steel', 'rifles/ironrain_ak63.jpg'),
(4, 'Assault Rifle', 'Kalashnikov AK-103', 'Russia', '7.62x39 mm', '415 mm', '550 m', '30-round CurDetachabale Box Magazine', 'Steel', 'rifles/ironrain_ak103.jpg'),
(5, 'Assault Rifle', 'MPi KM 72', 'Germany', '7.62x39 mm', '415 mm', '350 m', '30-round Curved Box', 'Steel + Wood', 'rifles/ironrain_ak-mpi-km-72.jpg'),
(6, 'Assault rifle', 'PM md. 63', 'Romania', '7.62x39 mm', '415 mm', '100 to 1000 m with sight adjustments', '30-round Detachable Box Magazine', 'Steel + Wood', 'rifles/ironrain_ak-ro.jpg'),
(7, 'Assault rifle', 'Kalashnikov AKM', 'Russia', '7.62x39 mm', '415 mm', '350 m', '10/20/30-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_akm.jpg'),
(8, 'Assault rifle', 'Kalashnikov AMD-65', 'Hungary', '7.62x39 mm', '317 mm', '350 m', '30-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_amd65.jpg'),
(9, 'Semi-automatic rifle', 'Bushmaster XM-15', 'USA', '5.56x45 mm', '400 mm', '550 m', '30-round STANAG Magazine', 'Steel', 'rifles/ironrain_bushmaster-xm-13.jpg'),
(10, 'Carabine', 'Daewoo K2C', 'South Korea', '5.56x45 mm', '310 mm', '310 m', '30-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_daewoo.jpg'),
(11, 'Destinated Marksman Rifle', 'Dragunov SVD', 'Russia', '7.62x54 mm', '620 mm', 'not known', '10-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_dragunov.jpg'),
(12, 'Battle Rifle', 'FN FAL', 'Belgium', '7.62x51 mm', '533 mm', '600 m', '20/30-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_fn-fal.jpg'),
(13, 'Assault Rifle', 'Heckler and Hogh G36', 'Germany', '5.56x45 mm', '480 mm', '600 m', '30-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_hkg36.jpg'),
(14, 'Sniper Rifle', 'ASG M40A3', 'USA', '7.62x51 mm', '610 mm', '800 m', '20-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_m40a3.jpg'),
(15, 'Assault Rifle', 'M4A1', 'USA', '5.56x45 mm', '368 mm', '500 m', '30-round Box Magazine', 'Steel', 'rifles/ironrain_m4a1.jpg'),
(16, 'Anti-aterial Rifle', 'Zijiang Model 99', 'China', '12.7x108 mm', '800 mm', '1500 m', '5-round Box Magazine', 'Steel', 'rifles/ironrain_m99.jpg'),
(17, 'Battle Rifle', 'MAS 36', 'France', '7.5x54 mm', '574 mm', '400 m', '5-round Stripped Clip, Internal Magazine', 'Iron', 'rifles/ironrain_mas36.jpg'),
(18, 'Battle Rifle', 'Mk 14 Enhanced Battle Rifle', 'USA', '7.62x51 mm', '457 mm', '500 m', '10/20-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_mk14-ebr.jpg'),
(19, 'Sniper Rifle', 'Mosin Nagant', 'Russia', '7.62x54 mm', '495 mm', '500 m', '5-round Non-Detachable Magazine', 'Steel + Wood', 'rifles/ironrain_mosin-nagant.jpg'),
(20, 'Assault  Rifle', 'Norinco cq', 'China', '5.56x45 mm', '504 mm', '460 m', '20/30-round Detachable Box Magazine', 'Steel', 'rifles/ironrain_norinco_qc.jpg'),
(21, 'Destinated Marksman Rifle', 'PSL/FPQ Romak-3', 'Romania', '7.62x54 mm', '620 mm', '800-1000 m', '10-round', 'Steel + Wood', 'rifles/ironrain_pls-fpk.jpg'),
(22, 'Semi-automatic Rifle', 'SKS Rifle', 'Russia', '7.62x39 mm', '510 mm', '500 m', 'Internal 10-round Magazine', 'Steel + Wood', 'rifles/ironrain_sks.jpg'),
(23, 'Assault Rifle', 'STG-44', 'Germany', '7.92x33 mm', '420 mm', '330 m', '30-round Detachable Box Magazine', 'Steel + Wood', 'rifles/ironrain_stg44.jpg'),
(24, 'Assault Rifle', 'Zastava M70', 'Yugoslavia', '7.62x39 mm', '414 mm', '410 m', '30-round AK-47 Detachable Box Magazine', 'Steel + Wood', 'rifles/ironrain_zastava-m70.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `shotguns`
--

$sql=CREATE TABLE `shotguns` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `title` varchar(60) NOT NULL,
  `brand` varchar(60) NOT NULL,
  `place` varchar(60) NOT NULL,
  `cartridge` varchar(60) NOT NULL,
  `barrel` varchar(11) NOT NULL,
  `ef_range` varchar(200) NOT NULL,
  `feed` varchar(200) NOT NULL,
  `material` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `shotguns`
--

INSERT INTO `shotguns` (`id`, `type`, `title`, `brand`, `place`, `cartridge`, `barrel`, `ef_range`, `feed`, `material`, `image`) VALUES
(1, 'Shotgun', 'Benelli M3', 'Benelli', 'Italy', '12/20 gauge shells or slugs', '500-600 mm', '150 m', '7+1 Round Tubular Magazine (Military) or 5+1 Round (Civilian)', 'Steel', 'shotguns/ironrain_benneli.jpg'),
(2, 'Combat shotgun', 'Franchi SPAS-12', 'Franchi', 'Italy', '12 gauge - 70 mm shells only', '455-610 mm', 'Depends on the ammunition', 'Tube Extension 5+1, 6+1, 7+1 and 8+1 Rounds, Internal Tube Magazine', 'Iron', 'shotguns/ironrain_franchi.jpg');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `antitank`
--
ALTER TABLE `antitank`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `explosives`
--
ALTER TABLE `explosives`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `machineguns`
--
ALTER TABLE `machineguns`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `meele_weapons`
--
ALTER TABLE `meele_weapons`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `pistols`
--
ALTER TABLE `pistols`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `rifles`
--
ALTER TABLE `rifles`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `shotguns`
--
ALTER TABLE `shotguns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `antitank`
--
ALTER TABLE `antitank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pentru tabele `explosives`
--
ALTER TABLE `explosives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pentru tabele `machineguns`
--
ALTER TABLE `machineguns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `meele_weapons`
--
ALTER TABLE `meele_weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `pistols`
--
ALTER TABLE `pistols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `rifles`
--
ALTER TABLE `rifles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pentru tabele `shotguns`
--
ALTER TABLE `shotguns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


if ($conn->query($sql) === TRUE) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>