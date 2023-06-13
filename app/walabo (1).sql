-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 09:52 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walabo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE `categ` (
  `cid` int(6) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`cid`, `cat`, `gender`, `cname`, `file`) VALUES
(29, 'SHOES', 'Female', 'A', 'SHOE A.jpg'),
(30, 'SHOES', 'Female', 'C', 'block shoe.jpg'),
(31, 'SHOES', 'Female', 'D', 'SHOE D.jpg'),
(32, 'SHOES', 'Female', 'E', 'SHOE E.jpg'),
(33, 'SHOES', 'Female', 'F', 'SHOE F.jpg'),
(34, 'SHOES', 'Female', 'G', 'SHOE G.jpg'),
(35, 'SHOES', 'Female', 'B', 'P00479946.jpg'),
(45, 'BOOTS', 'Female', 'F', 'bOOTS  F.jpg'),
(46, 'BOOTS', 'Female', 'B', 'Boots B.jpg'),
(47, 'BOOTS', 'Female', 'E', 'Boots E.jpg'),
(48, 'BOOTS', 'Female', 'A', 'Ladies Boots A.jpg'),
(49, 'BOOTS', 'Female', 'C', 'Ladies Boots C.jpg'),
(50, 'BOOTS', 'Female', 'D', 'Ladies Boots D.jpg'),
(51, 'BOOTS', 'Female', 'G', 'Ladies Boots G.jpg'),
(53, 'EVENING-GOWNS', 'Female', 'A', 'Gown A.jpg'),
(54, 'EVENING-GOWNS', 'Female', 'B', 'Gown B.jpg'),
(55, 'EVENING-GOWNS', 'Female', 'C', 'Gown C.jpg'),
(56, 'EVENING-GOWNS', 'Female', 'D', 'Gown d.jpg'),
(57, 'EVENING-GOWNS', 'Female', 'G', 'Gown G.jpg'),
(58, 'EVENING-GOWNS', 'Female', 'F', 'Gown. F.jpg'),
(59, 'EVENING-GOWNS', 'Female', 'E', 'Ladies Gown E.jpg'),
(60, 'WORK-DRESSES', 'Female', 'E', 'E.jpg'),
(61, 'WORK-DRESSES', 'Female', 'B', 'Workdress B.jpg'),
(62, 'WORK-DRESSES', 'Female', 'C', 'DRESS C.jpg'),
(63, 'WORK-DRESSES', 'Female', 'F', 'Workdress f.jpg'),
(64, 'WORK-DRESSES', 'Female', 'G', 'Workdress G.jpg'),
(65, 'WORK-DRESSES', 'Female', 'A', 'DRESS A.jpg'),
(68, 'WORK-DRESSES', 'Female', 'D', 'Workdress D.jpg'),
(74, 'TOPS', 'Female', 'A', 'Top A.jpg'),
(75, 'TOPS', 'Female', 'E', 'Top E.jpg'),
(76, 'TOPS', 'Female', 'C', 'Top C.jpg'),
(77, 'TOPS', 'Female', 'D', 'Top D.jpg'),
(78, 'TOPS', 'Female', 'F', 'Top F.jpg'),
(79, 'TOPS', 'Female', 'G', 'Top Gpg.jpg'),
(80, 'TOPS', 'Female', 'B', 'Top B.jpg'),
(81, 'HANDBAGS', 'Female', 'E', 'Bag E.jpg'),
(82, 'HANDBAGS', 'Female', 'A', 'bAG A.jpg'),
(83, 'HANDBAGS', 'Female', 'B', 'bAG B.jpg'),
(86, 'HANDBAGS', 'Female', 'C', 'BAG C.jpg'),
(87, 'HANDBAGS', 'Female', 'D', 'BAG D.jpg'),
(88, 'HANDBAGS', 'Female', 'F', 'BAG F.jpg'),
(89, 'HANDBAGS', 'Female', 'G', 'BAG G.jpg'),
(129, 'NAILS', 'Female', 'C', 'c.jpg'),
(130, 'NAILS', 'Female', 'A', 'Ladies Nail A.jpg'),
(131, 'NAILS', 'Female', 'B', 'Ladies nail B.jpg'),
(133, 'NAILS', 'Female', 'G', 'Ladies nail G.jpg'),
(134, 'NAILS', 'Female', 'D', 'Ladies nails D.jpg'),
(135, 'NAILS', 'Female', 'F', 'nail F.jpg'),
(136, 'NAILS', 'Female', 'E', 'nails ee.jpg'),
(137, 'SLEEPWEAR', 'Female', 'A', 'Ladies A.jpg'),
(138, 'SLEEPWEAR', 'Female', 'B', 'LADIES B.jpg'),
(139, 'SLEEPWEAR', 'Female', 'C', 'ladies C.jpg'),
(140, 'SLEEPWEAR', 'Female', 'D', 'LADIES D.jpg'),
(141, 'SLEEPWEAR', 'Female', 'E', 'LADIES E.jpg'),
(142, 'SLEEPWEAR', 'Female', 'F', 'LADIES F.jpg'),
(143, 'BELTS', 'Female', 'A', 'Ladies Belt A.jpg'),
(144, 'BELTS', 'Female', 'B', 'Ladies belt B.jpg'),
(145, 'BELTS', 'Female', 'C', 'Ladies Belt C.jpg'),
(146, 'BELTS', 'Female', 'D', 'Ladies belt D.jpg'),
(147, 'BELTS', 'Female', 'E', 'Ladies Belt E.jpg'),
(148, 'BELTS', 'Female', 'F', 'Ladies Belt F.jpg'),
(149, 'NECKLACES', 'Female', 'B', 'necklace B.jpg'),
(151, 'NECKLACES', 'Female', 'E', 'Necklace E.jpg'),
(155, 'NECKLACES', 'Female', 'F', 'd7cb671597e86bfb359bacecc1fe6fb5.jpg'),
(156, 'NECKLACES', 'Female', 'D', 'NECKLACE D.jpg'),
(163, 'NECKLACES', 'Female', 'C', 'Ladies Necklace C.jpg'),
(167, 'NECKLACES', 'Female', 'A', 'NECKLACE A.jpg'),
(173, 'NECKLACES', 'Female', 'G', 'NECKLACE G.jpg'),
(177, 'BRACELETS', 'Female', 'B', 'Braceles B.jpg'),
(178, 'BRACELETS', 'Female', 'C', 'BRACELET C.jpg'),
(179, 'BRACELETS', 'Female', 'D', 'Bracelet D .jpg'),
(180, 'BRACELETS', 'Female', 'F', 'BRACELET F.jpg'),
(181, 'BRACELETS', 'Female', 'G', 'BRACELET G.jpg'),
(182, 'BRACELETS', 'Female', 'E', 'Ladies Bracelet E.jpg'),
(183, 'BRACELETS', 'Female', 'A', 'Ladies Bracelet A.jpg'),
(184, 'MAKE-UP', 'Female', 'A', 'MAKEUP A.jpg'),
(185, 'MAKE-UP', 'Female', 'B', 'MAKEUP B.jpg'),
(186, 'MAKE-UP', 'Female', 'C', 'MAKEUP C.jpg'),
(187, 'MAKE-UP', 'Female', 'D', 'MAKEUP D.jpg'),
(188, 'MAKE-UP', 'Female', 'E', 'MAKEUP E.jpg'),
(189, 'MAKE-UP', 'Female', 'F', 'MAKEUP F.jpg'),
(190, 'MAKE-UP', 'Female', 'G', 'MAKEUP G.jpg'),
(191, 'HAIRSTYLES', 'Female', 'A', 'Hair A.jpg'),
(192, 'HAIRSTYLES', 'Female', 'B', 'HAIR B.jpg'),
(193, 'HAIRSTYLES', 'Female', 'C', 'HAIR C.jpg'),
(194, 'HAIRSTYLES', 'Female', 'D', 'HAIR D.jpg'),
(195, 'HAIRSTYLES', 'Female', 'E', 'HAIR E.jpg'),
(196, 'HAIRSTYLES', 'Female', 'F', 'HAIR F.jpg'),
(197, 'HAIRSTYLES', 'Female', 'G ', 'HAIR G.jpg'),
(198, 'HEAD-WRAPS', 'Female', 'A', 'HEAD DRESS A.jpg'),
(199, 'HEAD-WRAPS', 'Female', 'B', 'HEAD DRESS B.jpg'),
(200, 'HEAD-WRAPS', 'Female', 'C', 'HEAD DRESS C.jpg'),
(201, 'HEAD-WRAPS', 'Female', 'D', 'HEAD DRESS D.jpg'),
(202, 'HEAD-WRAPS', 'Female', 'E ', 'HEAD DRESS E.jpg'),
(203, 'HEAD-WRAPS', 'Female', 'F ', 'HEAD DRESS F.jpg'),
(204, 'HEAD-WRAPS', 'Female', 'G ', 'HEAD DRESS G.jpg'),
(206, 'BELTS', 'Female', 'G', 'Ladies Belt G.jpg'),
(207, 'SLEEPWEAR', 'Female', 'G', 'sleepwear G.jpg'),
(208, 'Dress shoes', 'Male', 'G', 'FORMAL SHOE G.jpg'),
(209, 'Dress shoes', 'Male', 'H', 'Formal shone H.jpg'),
(210, 'Dress shoes', 'Male', 'F', 'FORMAL SHOE F.jpg.webp'),
(211, 'Dress shoes', 'Male', 'E', 'FORMAL SHOE E.jpg.webp'),
(213, 'Dress shoes', 'Male', 'D', 'FORMAL SHOE D.jpg'),
(214, 'Dress shoes', 'Male', 'C', 'FORMAL SHOE C.jpg'),
(215, 'Dress shoes', 'Male', 'B', 'FORMAL SHOE B.jpg.webp.jpg'),
(216, 'Dress shoes', 'Male', 'A', 'FORMAL SHOE A.jpg'),
(217, 'Shoes', 'Male', 'A', 'MEN A.jpg.webp'),
(218, 'Shoes', 'Male', 'B', 'MEN B.jpg.webp'),
(219, 'Shoes', 'Male', 'C', 'SHOE MEN C.jpg.webp'),
(220, 'Shoes', 'Male', 'D', 'MEN D.jpg.webp'),
(221, 'Shoes', 'Male', 'E', 'MEN E.jpg.webp'),
(222, 'Shoes', 'Male', 'F', 'Man shoe f.jpg.webp'),
(223, 'Shoes', 'Male', 'G', 'men shoe g.jpg.webp'),
(224, 'Shoes', 'Male', 'H', 'MEN H jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clienttbl`
--

CREATE TABLE `clienttbl` (
  `id` int(6) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clienttbl`
--

INSERT INTO `clienttbl` (`id`, `fullname`, `phone`, `email`, `password`) VALUES
(8, 'Doreen Raheena Sulleyman ', '0249680126', 'drsulleyman.gh@gmail.com', 'BUWPhI8Vbf'),
(13, 'Mercy Sedinam Agordey ', '0548134406 ', 'mercysedinam08@gmail.com', 'njGSRb4wKl'),
(20, 'Adiza', '0239494566', 'ms.brimahannan@gmail.com', 'ercC3UpYvZ'),
(21, 'SAMUEL HUNPEVI', '0271610910', 'sammyglobalworld@gmail.com', 'ERFY5BbvP9'),
(22, 'Adiza', '', 'ms.brimahannan@gmail.com', 'hFe97JQPwL'),
(23, 'SAMUEL HUNPEVI', '+233271610910', 'sammyglobalworld@gmail.com', 'ExwFISgJWG'),
(24, '', '', '', '9jB6xcpFXz');

-- --------------------------------------------------------

--
-- Table structure for table `tblgrade`
--

CREATE TABLE `tblgrade` (
  `id` int(6) NOT NULL,
  `Tvalue` varchar(5) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `qresult` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgrade`
--

INSERT INTO `tblgrade` (`id`, `Tvalue`, `ttl`, `gender`, `qresult`, `file`) VALUES
(10, 'A', 'Absolute Natural', '', 'You like to make your life easier, more comfortable, and less fussy. A simple, minimalist, functional appearance gives you a friendly, relaxed, laidback, optimistic, and practical attitude. Nothing close-in or restricted appeals to you. But you might be considered lazy if you always dress like this. You have to elevate your style. Get your personalised style plan now', ''),
(11, 'AB', 'Casual Grace', '', 'You like the right amount of pretty details to draw the eye to your finest assets. Your clothes are soft and attractive, so it\'s easy to tell you\'re a lady before anything. You don\'t need a lot of structure, just a few delicate accessories to bring out your captivating innocence and feminine womanliness. Claim your complete style plan for elevating your brand\'s visibility.', ''),
(12, 'AC', 'Casual Urban', '', 'Preppy with a bit of sass - show some respect for this lady! Soft, solid colours and incredible details, like a cowl neck or a fabric flower, add a liberal glow to your conservative comfort. You do classic with a kick and casual with a hint of old-school glamour. Your sister, who laughed at what you wore as a child, now asks to borrow your clothes. Ah, revenge is urban. Your personal style is a blend of \'Natural\' and â€˜Classic\'. Claim your complete style plan for elevating your brand visibility.', 'Doreen Donkor, Travel Concierge, Bekimk Travels, Casual Urban Style personality.png'),
(13, 'AD', 'Casual Attraction', '', 'Wow! That\'s the word that comes to mind when you\'re seen. You have freedom of style, which says you\'re ready for fun. Mornings are meant for rising up and moving - no hours spent applying makeup and fixing hair. But you\'ve got to let off some steam, which means a wardrobe with excitement and seductive charm that makes flirting even easier. Bare shoulders, bold earrings, bold nail polish â€“ you want attention, and you get it! Your personal style is a meld of \'Natural\' and \'Sexy\'.', ''),
(14, 'AE', 'Casual Elegance', '', 'Your casual elegance fits royalty. Your body\'s soft lines and structured shapes create a feminine freshness that radiates power. Wearing fewer accessories enhances the positive aspects of wearing fabrics, textures, and prints. It doesn\'t matter if you can\'t afford designer labels; you still know how to shop to achieve a designer look. In your personal style, you combine \'Natural\' with \'Elegant\'. ', ''),
(15, 'AF', 'Casual Command', '', 'You\'re in charge - of casual style. The more you make a statement, the more comfortable you become. The combination of military inspiration with cosmopolitan flair makes for a striking look. In addition to the shape, the overall picture must be easy-going and natural with minimal accessories. \"Natural\" and \"dramatic\" describe your personal style. ', ''),
(16, 'AG', 'Casual Eclectic ', '', 'Your style motto is \"Dress outside the box.\" Funky, fun, and experimental, you constantly push the envelope when it comes to dressing, whether for work or play. You don\'t hesitate to experiment, and your clothes reflect that - bold prints, feathers, fringe. You come out of a thrift store looking like you got dressed on the catwalk. It\'s true! Your style is a mix of natural and creative.', ''),
(17, 'B', 'Absolute Feminine', '', 'Dressing in soft, feminine clothing with intricate antique or floral accessories, like scarves, pearls, brooches, or hairpieces, and wearing the right shoes can make you look calm, youthful, caring, and relaxed. It\'s perfect for counsellors, nurses, doctors, kindergarten teachers, nannies, women in ministry, and wedding planners. Some people might think you\'re immature, weak, and unable to handle challenging situations because of your delicate appearance. Find out how to make your brand more visible.', ''),
(18, 'BA', 'Feminine Ease', '', 'In the past, looking your feminine best meant contorting and distorting your body (think corsets, hoops, and hobble skirts). To convey authority, women\'s clothing became more masculine when they entered the \"man\'s world\" of work. You\'re here to look good while being comfortable. Fashion choices with embellishments and easy shapes do the feminising and accessorising for you. Isn\'t that simple? \'Feminine\' and \'Natural\' are two words that describe your style.', ''),
(20, 'BD', 'Sensual Siren', '', 'It\'s old-school Hollywood again, and it\'s better than ever. Your style is feminine, flirty and sexy. You show off what your mama gave you with provocative, figure-hugging clothes! Dramatic make-up (smoky eyes, red nail polish), necklaces that show off your cleavage, and sleek, long hair are sure to set off the smoke detector. Your style combines \'Feminine\' and \'Sexy\'. Claim your personalised style plan now', ''),
(21, 'BE ', 'Feminine Sophisticate', '', 'Your theme song is I\'m a woman; hear me roar. You\'re not a powder puff, but you like femininity. You can see it when you mix dark colours with pastels. There\'s no frou-frou here - it\'s all clean lines and professional polish. Since sophistication is expensive, you don\'t mind spending more on high-quality items. Your personal style is a mashup of \'Feminine\' and \'Elegant\'.', ''),
(22, 'BF', ' Feminine Command ', '', 'As a fashion force to be reckoned with, you exude confidence, strength, and ladylike details. What makes you stand out are your ladylike attributes and accessories. Your goals are clear, and you\'re not afraid to go after them. Choosing the right clothes guarantees you\'ll look good at the party. In terms of style, you\'re a mix of \'Feminine\' and \'Dramatic\'. ', ''),
(23, 'BG ', 'Feminine Artistic', '', 'Women around the world hate you. Where\'s the logic? You\'re one of those types who\'d look great in a paper bag. That\'s because you love details. Prints, bows, lace, gathers, and a wide variety of fabrics make your wardrobe vibrant and fresh. The feminine side of you may be all about sugar and spice, but your creative side believes that art is all about expressing yourself. It\'s a fusion of \'feminine\' and \'creative\'.', ''),
(24, 'C', 'Absolute Classic ', '', 'Wear conservative clothing and accessories that are neat, well-groomed, and lack dramatic colors. Two to three colours in a medium contrast make up your entire outfit. You prefer clothes that are comfortable and functional. This creates a Tailored and Businesslike Visual Impression for a Credible, Conservative, Practical and Trustworthy Psychological Impression. The Greatest Negative of Style is that too often you become complacent and start shopping only when necessary, at the last minute and often with a frugality. The result is usually a dated, boring, unimaginative, and older appearance. To ensure this does not happen, it is vital that you show an interest in contemporary clothing looks and regularly restock your wardrobe with good quality, current garments and accessories.', ''),
(25, 'BC', 'Timeless Charm', '', 'Occasionally, you feel as if you were born during the wrong era. It is precisely what women have been striving for centuries to achieve - captivating, warm, and youthful beauty. It\'s no wonder you\'re such a Downton Abbey fan! It\'s important to have luxurious fabrics, but without too much structure. Several delicate pieces of jewellery and accessories contrast with your meticulous attention to your makeup and hair. To make men want to reach out and touch you, those locks should have just the right amount of curl or wave. \'Feminine\' and \'Classic\' are key terms to describe your personal style.', ''),
(26, 'CA', 'Sporty Classic', '', 'Out and about and on the move - that\'s you, so you like clothes which let you move. Forget fads - you want clothes which last, have a natural appeal, and are feminine without the added fluff. Whether working, shopping, or playing, you look great every step of the way; in fact, you make all other moms at your kid\'s school look bad (even the dads agree).). What makes you even more hated is that you don\'t use a lot of make-up, hair products or jewellery to score points with your sporty style. Your style is a meld of \'Classic\' and â€˜Natural\'Your style will elevate your brand\'s visibility when you claim your full plan. Claim your personalised style plan now', ''),
(27, ' CB', 'Classic Grace', '', 'Sweet and charming - you\'re a strong, independent woman who isn\'t afraid to show her softer side. A few frills and classic pieces make your wardrobe a graceful winner for years to come. You are a great deal about your looks, and it shows. Youâ€™ve got a timeless style with feminine allure at work, play, dinner, or running errands. \'Classic\' and \'Feminine\' characterise your personal style. Clarify your full-style plan today.', ''),
(28, 'CD', 'Classic Siren', '', 'You\'re that sexy librarian type all guys wish they could meet, the seductress between the pages. You don\'t shun styles that accentuate your curves. However, it\'s done with clean lines and classic details. Versatility is the key. Your wardrobe staples include a fitted jacket for daywear and an off-the-shoulder sheath for a night on the town. Who knows? Your style may be the key to higher literacy rates and bigger book clubs. Your personal style is a meld of \'Classic\' and \'Sexy\'', ''),
(29, ' CE', 'Classic Chic', '', 'There is no doubt that she invented the Classic Chic category! You\'re never underdressed with clean lines, a few details, and a lotta class. You\'re professional and conservative, but you have an elegance that sets you apart. You\'ll look chic with a neat hairstyle and medium-sized jewellery and accessories. \'Classic\' and \'Elegant\' are your personal styles. Get your plan for elevating your style. ', ''),
(30, 'CF', 'Classic Command', '', 'You take fashion command, and that\'s what you do. It doesn\'t matter if you\'re at work or the club; your basics and old standbys are amazing. But you also like a hint of drama. Each piece of clothing becomes powerful with oversized accessories, intense prints, and bold colours. You\'ve got a mix of classic and dramatic styles. Find out how to elevate your style for brand visibility. ', ''),
(31, 'CG', 'Classic Innovator', '', 'Most Likely to Start a New Clothing Trend\" That\'s because you\'re not afraid of trying new styles and ways to wear old things. You prefer unconventional and often divergent styles in terms of colours, prints, and accessories. A mix of classic and creative elements defines your style. Non-conformity is the key to creating a new look every time.  \"Classic\" and \"Creative\" are the two words that describe your style.', ''),
(32, 'D', 'Absolute Sexy', '', 'You look seductive, glamorous, liberating, and exciting. You create a provocative, daring, and desirous sexual encounter with your appearance, which complements your outgoing, confident, magnetic, sensual, and flirtatious nature. You\'re in luck if this works for your career. In terms of clothing, you like figure-hugging pieces that draw attention to your waist, breasts, legs, and hips. Sexy dressing does not have to be offensive when appropriateness is taken into account. Despite the fact that you gain attention quickly, this style primarily irritates other women sharing the same space with you and casts doubt on your competence as a professional, which usually disrupts your progress. The time has come to introduce a few career-elevating colours and accessories to your wardrobe. Claim your complete plan to elevate your style for brand visibility', ''),
(33, 'DA', 'Sporty Vixen ', '', 'Savvy and saucy: You can catch your eyes with your sexy style. Despite all your glitz, you\'re polished. You\'ll make the men fall for your high heels with a ruffle, animal print, and a bit of shoulder %#45. Razzle and dazzle with shimmer prints and fabric details. Your style is a mix of \'Alluring\' and \'Natural\'.', ''),
(34, 'DB', 'Femme Fatale', '', 'You know how to play up your figure with body-hugging dresses, flirty details, bold colours and sexy sizzle. You know how to flaunt it (and men, thank you). You also know what you hide can be just as tantalising as what you reveal, so you use suitable shapes to capitalise on your curves without creating fashion fatalities. Feminine va-va-voom! A blend of allure and feminine characterises your personal style.', ''),
(35, 'DC', 'Classic Vixen', '', 'There\'s no need to say more. I love how you channel Marilyn Monroe at her sauciest. Also, you like it straight up - nothing extraordinary, just nothing out of the ordinary. Is it possible to be conservative and sexy at the same time? Definitely! That simplicity of style communicates the complexity of a chic attitude. You intrigue and mystify men - they don\'t know what to make of you. That\'s the way you like it. \'Alluring\' and \'Classic\' are your personal styles.', ''),
(36, 'DE', 'Sensual Elegance', '', '\r\nAll your senses are stimulated by elegance: the texture of your clothes, the sound of your heels clicking, the radiance of your colours, and the scent of your leather corset belt. No matter what you wear, whether it\'s a wrap gown, snakeskin skirt, or lacey camisole, you want it to tell a story. Style doesn\'t need a sixth sense with sexy curves and graceful designs. Style is a blend of \'alluring\' and \'elegant\'.', ''),
(37, ' DF', 'Siren Command', '', 'Do you remember that saying, \"No Fear\"? This describes your style perfectly. A bold personality is reflected in animal prints, fire engine reds, and lines that draw the eye. You\'re sexy, saucy, sensual, and ready to go kung fu on anyone who doubts you. Vivid details make an impression just as much as power tops and jackets that take care of business. Your personal style is a blend of \'Alluring\' and \'Dramatic\'.', ''),
(38, 'DG', 'Avant-Garde Siren', '', 'You don\'t look back for inspiration - you look forward. You\'re a sexy and creative individual who relishes freedom and takes funky to the limit. Your seductive innovation mixes colours, themes, and styles totally different from each other. Instead of your cubicle office clothes, you\'ll take a bold step into artsy circles and occupations! Your personal style combines \'Alluring\' and \'Creative\'.', ''),
(39, 'E', 'Absolute Elegance', '', 'You meticulously manage every aspect of your appearance to command respect and admiration. Simple, well-tailored, and uncluttered clothes are your jam. Having the means to afford high-quality clothes and maintain them is the greatest positive of style. One of the most significant negatives of this style is: your near-perfect appearance may intimidate others, as perfection can lead others to feel inferior. The fantastic news is there is a way to elevate your style to work on your behalf.', ''),
(40, 'EA', 'Elegant Ease', '', 'You can have it all! Look graceful and well-dressed while being comfortable. Details make all the difference. It\'s about roomy fits, sheer blouses, drapes, and neutral colours. You\'re not trying to impress, but you do it anyway. Simple yet refined, you\'re a contradiction of modern proportions. Your style is a mashup of elegance and natural. ', ''),
(41, ' EB', 'Elegant Allure', '', 'There\'s something captivating about details. The allure of lace, draping, and shimmer with minimal accessories make you look charming. Considering you know how to emulate the style of the ladies of the silver screen, you\'ve got a lot in common. Styles matter just as much as acting. Do your part - and dress like it too. Your style is a mix of elegant and feminine.', ''),
(42, 'EC', 'Sophisticated Elegance', '', 'Fashions don\'t influence you - you influence them. You\'re the boss, the VP, the lady in charge. You\'re always put together, so much that your mom asks, \"Why aren\'t you married?\" (because your confidence can be intimidating). There are no frills, no fluff, just a straight-up style that emphasises your womanhood. Wow, that\'s sophisticated. A mix of \'Elegant\' and \'Classic\' is your style. ', ''),
(43, 'ED', 'Elegant Glamour ', '', 'People speak ill of you behind your back. \"She always looks good.\" That\'s because you know how to use your curves. It doesn\'t matter if you\'re at the office or in casual mode; your attire has a hint of glamour. With such panache, how do you do sexy? Your wardrobe is filled with classic pieces with striking shapes and bright colours. Less is more in the Elegant Glamour category; less garnish, more you. Style is a fusion of \'Elegant\' and \'Sexy\'.', ''),
(44, 'EF', 'Elegant Command', '', 'You\'re in charge, and you\'re not messing around! You\'re a woman of distinction who likes different clothes and accessories. You\'ll take the world by storm with martial details, fitted shapes, and bold prints. Your style isn\'t too fad or funky to attract attention. To win the battle of the beau monde, you rely on intense shapes and colours. Your style is a mix of \'Elegant\' and \'Dramatic\'. Claim your complete plan to elevate your brand', ''),
(45, 'EG', 'Artful Elegance', '', 'Introducing the artist to Aubrey Hepburn. It doesn\'t matter if you\'re in a board room or a sidewalk cafe; you look at home anywhere. With an eye for the unusual, you can always find elegant pieces to pair with unexpected colours, prints, and accessories. You\'ve got it all together with some imaginative touches. That\'s what we call modern art. Style is a blend of \'Elegant\' and \'Creative\'.', ''),
(46, ' F', 'Absolute Dramatic', '', 'Cosmopolitan, urbane, fashionable, strong and eye-catching shapes and colours, your style blends \'Dramatic\' and \'Natural\', you like the look of clothing that is bold, impressive and explores natural refinement. It\'s all about simplicity versus spectacular, no restrictions, and accessories become accents. It\'s about weight, shape, grooming, and attire. The collection features oversized, bold, defined, strong shapes, distinctive, exotic, one-of-a-kind pieces, and statement pieces. Because of your style, star recognition is memorable, gains attention quickly, and is automatically respected. One of the most significant negatives of style is that they may alienate themselves by appearing unapproachable.', ''),
(47, 'FA', 'Dramatic Adventurer', '', 'Shopping always means exploring new horizons and exploring new possibilities. If your style blends \'Dramatic\' and \'Natural\', you like clothes that are bold, impressive, and explore natural refinement. Simplicity versus spectacular, you\'re ready for adventure, not restriction while accessories become accents.', ''),
(48, 'FB', 'Dramatic Charm', '', 'Make it memorable is your motto. Charming and feminine meets the spectacular colour, length, and shape. Your clothes say you\'re all girl, but they also stage productions with all the grandeur of a period film. If sweet and stunning can be found in the same place, it\'s right here. Ooh-la-la! Your personal style is a meld of \'Dramatic\' and \'Feminine\'.', ''),
(49, 'FC', 'Timeless Dramatic ', '', 'You like to make a statement. Striking pieces coupled with the right colours and accessories are all the drama you need - but in timeless pieces which never go out of style. You are mod, ready to stand in front of the camera. Do you shop in retail shops or raid vintage clothiers? It\'s hard to tell because your style needs to be pinned down. Your personal style is a meld of \'Dramatic\' and \'Classic\'.', ''),
(50, 'FD', 'Dramatic Siren ', '', 'Like the lady in Roy Orbison\'s hit song Pretty Woman, \"no one could look as good as you\"! Vivid pieces accentuate your sultry side and make men wish you\'d stop for a while. And what better way to show off a lady\'s best assets than with shorts, short skirts, thigh-high dresses, tights, boots and peep-toe wedges? Extremes and seduction kiss in your wardrobe. Make them cry as you walk on by. Your personal style is a meld of \'Dramatic\' and \'Sexy\'.', ''),
(51, ' FE', 'Dramatic Sophisticate', '', 'Sophisticated Lady goes the song, and that describes you. You may not run in high society circles, but you dress like it. Bold notes and vibrato of feminine mystique create a complexity of subtle drama and chic style. A glimmer here, that touch of mink there - you know how to play the song. Your personal style is a meld of \'Dramatic\' and â€˜Elegant\'.', ''),
(52, 'FG', 'Eclectic Dramatic', '', 'A work of art is the unique result of a unique temperament. ~ Oscar Wilde Is there a more apt description of you? You are a non-conformist who likes a diverse range of colours, prints and fits and isnâ€™t afraid to pair purple and green together, no matter what stylists say! A thespian of the wardrobe, you make your outfits perform and use accessories like props to create excitement and focus attention. Your personal style is a meld of \'Dramatic\' and â€˜Creative\'.', ''),
(53, 'G', 'Absolute Creative', '', 'Your unique clothing choices make you appear unconventional and individualistic. Innovative, Eclectic, and Arty - you\'re all that and more. Wearing accessories from different eras and styles, no makeup, theatrical makeup, and hair that\'s natural, you get inspiration from Katy Perry and Helena Bonham Carter while shopping for Vivian Westwood and Cheap & Chic. Your total style persona is revealed when creativity is melded with your secondary style direction.  Your style profile is just a sashay away. Take the next step and fill it out.', ''),
(54, 'GA', 'Sporty Eclectic', '', 'What\'s your go-to style? That\'s not you! Whatever you wear, make it easy-going, fun, and free-spirited. Whether it\'s a hat, boots, or scarf, you know the right stuff to add for freedom of expression. You\'re not aiming to start trends but to be comfortably fashionable with minimum effort. Your style is a meld of  DOMINANT \'Creative\' with \'\'Natural\' as your accent style. ', ''),
(55, 'GB', 'Eclectic Allure ', '', 'There\'s no doubt about it; you were born at the wrong time. You can undoubtedly find beauty in different eras and incorporate them into your style. You\'ve got the makings of an enthralling outfit with lace here and bold accessories there. You\'re creative, and you dress to show it. It\'s not about where you found it, it\'s about how you thought of it. It\'s easy to pair clothes to create a womanly wow. Your personal style combines \'Creative\' and \'Feminine\'.', ''),
(56, ' GC', 'Eclectic Control', '', 'Your clothes reflect your cool, calm, and under-control attitude. Is that colour? Are there pleats? Who wears cowls? Is it faux fur? All of them go together in a mix that never looks mismatched. You like the classic style but don\'t want to look like everyone else. People are always talking about your clothing choices because of their timeless appeal, bold colours, and playful texture and design combinations. It\'s a mix of \'Creative\' and \'Classic\'.', ''),
(57, 'GD', ' Creative Siren', '', 'It\'s \"My Way\" for you. You have to be yourself. Sure, you\'re sexy, but you\'re smart and know how to play up the pieces of your wardrobe with bold colours and intellectual flair. The details you wear create an overall picture, and you\'re not afraid to try out different styles. Wow, that\'s creative! Your style ideas are fashion food for thought, just like a work of art. \'Creative\' and \'Sexy\' are two words that describe your style.', ''),
(58, 'GE', 'Eclectic Elegance', '', 'It\'s all about elegance - but you like lots of looks. Your wardrobe choices are influenced by sheen and texture. You\'re hip, but you can also rival Coco Chanel! You\'re just as comfortable if you\'re wearing a flirty flare skirt and fur. Are you a diverse diva? That\'s right. It\'s a mix of \'Creative\' and \'Elegant\'.', ''),
(59, 'GF', 'Eclectic Command', '', 'You\'re busy, but even on your breaks, you like to stay organized, including your outfits. Your style is strong and upfront, whether sophisticated, sporty, feminine, or dramatic. Creativeness and dramatic flair combine well in your style. You like dressing on edge without the artsy stuff. You\'re the Captain of Couture.', ''),
(61, 'C', 'Absolute Classic', 'Male', 'You\'re a classic man because you\'re confident and mature. You prefer classically styled garments over anything highly fashionable since you avoid extremes in most things, including your clothes. Undoubtedly, your classic clothing style is the most versatile and easiest to master of all business clothing styles.', ''),
(62, ' CG', 'Inventive Classic', 'Male', 'You are the man who appears to be classically dressed, but upon closer examination, your tie may have a hidden image. With your ensemble, you\'ll surprise those around you with something sneaky and unexpected. You are not afraid to go outside what is expected...but not to a great extent. You just need to be individual enough not to fit in with the crowd.', ''),
(63, 'CF', 'Outstanding Classic ', 'Male', 'Despite wearing brighter, stronger colours, you maintain a classical appearance. No matter what you wear, whether cufflinks or casual clothes, your wardrobe will have more extensive accessories or bold pops of colour. It doesn\'t bother you that you stand out a little...just a little.', ''),
(64, 'CE', 'Timeless Classic', 'Male', 'Style and conservative will be your wardrobe\'s hallmarks.\r\nNo matter what you wear, you\'re always dressed to impress.\r\nYou have a meticulous elegance that sets you apart. It is easy to look chic with a neat hairstyle and small to medium-sized accessories.', ''),
(65, 'CA  ', 'Relaxed Classic', 'Male', 'You are the only Classic with jeans in your wardrobe. In spite of this, you\'ll be dressed darkly and well-tailored. No rips or pattern fading here. You\'re always on the move, so you like clothes that let you move.\r\n\r\nForget about fads and wear clothing that will last. You do whatever you want with a relaxed attitude without looking messy or unattractive.', ''),
(66, 'CH', 'Classic Rebellious', 'Male', 'There is something unexpectedly classic about you. You may wear black in your wardrobe and leave your hair an extra week before you get it trimmed, but you are a classic at heart. Despite your desire to shock, you do so only when it is safe and appropriate. You have a more rebellious style than most in a direct manner.', ''),
(67, 'CB', 'Classic Romantic ', 'Male', 'There will be touches of velour, suede, and silk in your wardrobe. The perfect combination of charm and debonair. Your appearance is important to you, and it shows. You\'ve got timeless style with old-school appeal, whether you\'re at work, playing, eating, or running errands.', ''),
(68, 'CD', 'Classic Seductive', 'Male', 'Of all the Sexy, you are the least demonstrative. It\'s more likely that you\'ll work out and wear a slim fit instead of a perfect fit, i.e., you\'d wear an Italian fit suit over one with a British fit. You\'ll wear more form-fitting clothes than the regular Classic guy. It\'s your look that makes people look twice, as you have an aura around you that\'s hidden in the tailoring of your clothes', ''),
(69, 'GC', 'Reliable Enigma', 'Male', 'When fitting into a corporate environment, you will find solutions in retro-style pieces from bygone eras. Creating your style means recycling fashion to create a masterpiece that does not shock but starts a conversation. You like classic styling, and you don\'t like looking like everyone else. Your clothing choices make others sit up and notice their timeless appeal, as well as their bold colour and playful pairings of texture and design. \r\n\r\nYour style is a blend of creative and classic styles \r\n', ''),
(70, 'G', 'Absolute Creative ', 'Male', 'The hardest style to emulate is yours. You are a genuinely creative dresser because you can seamlessly combine completely unrelated garments, colours, patterns, and accessories. If another man without this natural creativity attempts this mode of dressing, he will likely end up looking weird or funny.\r\n\r\nThere is a full dominance of creativity in your unique style personality \r\n', ''),
(71, 'GF', 'Inspirational Innovator', 'Male', 'You\'ll find yourself wearing bold, bright colours with geometric patterns.\r\n\r\nEven with your busy schedule, you like to keep things under control when you get a break, including your appearance. Despite your taste in fashion, you don\'t like artsy extras. You are a captain of couture, a sergeant major of style.\r\n\r\nYour style is heavenly dominated by a creative style personality while your accent style personality is Dramatic', ''),
(72, 'GE ', ' Timeless Artist', 'Male', 'You like various looks - but they all share the quality of elegance. You like to dress hip, but you can also rival Tom Ford!\r\n\r\nSmoking jackets are just as comfortable as dinner suits. There is nothing plain and simple about you.\r\n\r\nYour style is Creative with a touch of elegant style personality ', ''),
(73, 'GA', 'Relaxed Artist', 'Male', 'You don\'t want to look like you just stepped out of the bush. Whatever you wear, it must be easy-going, fun, and free-spirited. Your knowledge of the right items to add to the freedom of expression will allow you to express yourself without compromising your style or active lifestyle. It\'s not about setting trends but being comfortable and easy to dress.\r\n\r\nYour personal style is Creative with a touch of natural style personality. ', ''),
(74, 'GH', 'Renegade Artist', 'Male', 'Your style does not shock anyone but makes them scratch their heads. There will be a mixture of fear and amazement when they encounter you. It is common for your images to feature dark and mysterious elements that often surprise those who encounter you. \r\n\r\nYour appearance is a blend of a Creative dominated style personality with a Rebellious accent style personality \r\n', ''),
(75, ' GB', 'Charming Bohemian', 'Male', 'Despite your age, your style reflects a bygone era. Quite possibly with a hipster beard.\r\n\r\nI don\'t doubt that you were born in the wrong era. Your unique style incorporates the romantic design of different decades. \"Where did you get that?\" is less important to you than \"How did you think of that?\". You are creative, and you dress to show it. It\'s easy to pair clothes to create wow and fun with a bit of imagination. \r\n\r\nYour style is a combination of Creative and Romantic style personalities. ', ''),
(76, 'GD', 'Seductive Artist', 'Male', 'Having a margarita while flexing by the pool, that\'s you. Your theme is \"My Way.\". You\'re all about being yourself. Yes, you\'re sexy, but you\'re smart and know how to play up the pieces in your wardrobe, combining splashes of bright colour with intellectual flair. As a fashionista, you are not afraid to experiment with different styles to create an overall picture. That\'s a very creative idea! As a work of art, your style ideas are food for thought when it comes to fashion.', ''),
(77, 'FC ', 'Reliable Dramatic', 'Male', 'You like to make a statement, so you live in classically tailored and vibrant suits. With striking pieces and the right colours and accessories, you will always be in style - with timeless pieces that never go out of style.\r\n\r\nYour unique style is a combination of Drama and Classic style personalities. ', ''),
(78, 'FG', 'Innovative Dramatic', 'Male', 'Over-the-top accessories, big coats, and large patterns. You can be intimidating or a work of art, depending on your unique temperament. Is there a better description of you than Oscar Wilde. No matter what your stylists say, you\'re not afraid to pair purple and green together! You\'re a nonconformist who likes various colours, prints and fits. As a thespian of the wardrobe, you make your outfits perform and use accessories as props to create excitement. \r\n\r\nYour style is a combination of Drama and Creative style personalities. ', ''),
(79, 'ssd', 'ssd', 'Male', '<p>Hello</p>\r\n<p>hello1</p>\r\n<p>hello2</p>\r\n<p>hello 3</p>\r\n<p>hello 4</p>', '124561df-2573-4b16-9490-4bf10553f378.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tblquiz`
--

CREATE TABLE `tblquiz` (
  `qid` int(6) NOT NULL,
  `shoes` varchar(255) NOT NULL,
  `occasionwardrobe` varchar(255) NOT NULL,
  `workwardrobe` varchar(255) NOT NULL,
  `top` varchar(255) NOT NULL,
  `handbag` varchar(255) NOT NULL,
  `hair` varchar(255) NOT NULL,
  `makeup` varchar(255) NOT NULL,
  `wrap` varchar(255) NOT NULL,
  `manicure` varchar(255) NOT NULL,
  `sleepwear` varchar(255) NOT NULL,
  `belt` varchar(255) NOT NULL,
  `necklace` varchar(255) NOT NULL,
  `bracelet` varchar(255) NOT NULL,
  `hair2` varchar(255) NOT NULL,
  `lingerie2` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `qresult` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquiz`
--

INSERT INTO `tblquiz` (`qid`, `shoes`, `occasionwardrobe`, `workwardrobe`, `top`, `handbag`, `hair`, `makeup`, `wrap`, `manicure`, `sleepwear`, `belt`, `necklace`, `bracelet`, `hair2`, `lingerie2`, `fullname`, `qresult`, `email`, `phone`, `terms`) VALUES
(61, 'D', 'E', 'G', 'E', 'A', 'G ', 'G', 'F ', 'F', 'F', 'F', 'A', 'A', 'B', 'C', 'Adiza', 'DEGEAG GFFFAABC', 'ms.brimahannan@gmail.com', '0239494566', 'yes'),
(62, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'F ', 'F', 'F', 'E', 'A', 'E', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GFFEAEAA', 'sammyglobalworld@gmail.com', '0271610910', 'yes'),
(63, 'A', 'E', 'D', 'B', 'G', 'G ', 'G', 'F ', 'E', 'F', 'F', 'G', 'A', 'C', 'B', 'Adiza', 'AEDBGG GEFFGACB', 'ms.brimahannan@gmail.com', '', 'yes'),
(64, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'G', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEEGAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(65, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'G', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEEGAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(66, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'G', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEEGAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(67, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'G', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEEGAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(68, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(69, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(70, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(71, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(72, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(73, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'G', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEEGAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(76, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(77, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(78, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(79, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(80, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(81, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(82, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(83, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(84, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(85, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(86, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(87, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes'),
(88, 'B', 'E', 'D', 'B', 'G', 'G ', 'G', 'G ', 'E', 'E', 'E', 'C', 'A', 'A', 'A', 'SAMUEL HUNPEVI', 'BEDBGG GEEECAAA', 'sammyglobalworld@gmail.com', '+233271610910', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `privi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `password2`, `privi`) VALUES
(1, 'click', 'click@mail.com', 'click', 'click', 'Administrator'),
(2, '', 'agoo@walanii.com', 'AllGood123,', 'AllGood123,', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `clienttbl`
--
ALTER TABLE `clienttbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgrade`
--
ALTER TABLE `tblgrade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblquiz`
--
ALTER TABLE `tblquiz`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categ`
--
ALTER TABLE `categ`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `clienttbl`
--
ALTER TABLE `clienttbl`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblgrade`
--
ALTER TABLE `tblgrade`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tblquiz`
--
ALTER TABLE `tblquiz`
  MODIFY `qid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
