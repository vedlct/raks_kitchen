-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 10:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raks_kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) NOT NULL,
  `small` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `small`) VALUES
(1, ''),
(2, 'small');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_banner`
--

CREATE TABLE `about_us_banner` (
  `id` int(10) NOT NULL,
  `details` varchar(60000) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us_banner`
--

INSERT INTO `about_us_banner` (`id`, `details`, `image`) VALUES
(1, 'Some words about us\nId pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.\n\nId pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.\n\nMission\n\nId pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.\n\nId pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.\n\nFilosofy\n\nId pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.', '');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_details`
--

CREATE TABLE `about_us_details` (
  `id` int(10) NOT NULL,
  `header` varchar(1000) DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us_details`
--

INSERT INTO `about_us_details` (`id`, `header`, `details`) VALUES
(4, '"EX VERO MEDIOCREM"', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nPer ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.'),
(5, 'header', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.'),
(6, 'header', '<p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum pri</b><img data-filename="sales-report-template-image-11.jpg" xss=removed><b>mis in faucibus.Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.</b></p>'),
(7, 'header', '<p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum pri</b><img data-filename="sales-report-template-image-11.jpg" xss="removed"><b>mis in faucibus.Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.</b></p><p><img data-filename="images.jpg" xss=removed><b><br></b></p>'),
(8, 'header', '<p><br></p>'),
(9, 'header', '<p><p xss=removed><img data-filename="images.jpg" xss="removed" xss=removed></p></p><p xss=removed><b xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum pri</b><img data-filename="sales-report-template-image-11.jpg" xss="removed" xss=removed><b xss=removed>mis in faucibus.Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.</b></p>'),
(10, 'header', '<p></p><p xss="removed"><b><img data-filename="images.jpg" xss="removed"></b></p><p></p><p xss="removed"><span xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum pri</span><img data-filename="sales-report-template-image-11.jpg" xss="removed"><span xss="removed">mis in faucibus.Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.</span></p>'),
(11, 'header', '<p></p><p xss="removed"><img data-filename="images.jpg" xss=removed><b><img data-filename="images.jpg" xss="removed"></b></p><p></p><p xss="removed"><span xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum pri</span><img data-filename="sales-report-template-image-11.jpg" xss="removed"><span xss="removed">mis in faucibus.Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.</span></p>'),
(12, 'header', '<p></p><p xss="removed"><img data-filename="images.jpg" xss="removed"><b><img data-filename="images.jpg" xss="removed"></b></p>'),
(13, 'header', '<p></p><p xss="removed"><img data-filename="images.jpg" xss="removed"><span xss=removed>Some words about us Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in. Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in. Mission Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in. Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in. Filosofy Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.</span><b><img data-filename="images.jpg" xss="removed"></b></p>');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_feature`
--

CREATE TABLE `about_us_feature` (
  `id` int(10) NOT NULL,
  `big` varchar(100) DEFAULT NULL,
  `small` varchar(1000) DEFAULT NULL,
  `box_header` varchar(100) DEFAULT NULL,
  `box_details` varchar(9000) DEFAULT NULL,
  `box_icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us_feature`
--

INSERT INTO `about_us_feature` (`id`, `big`, `small`, `box_header`, `box_details`, `box_icon`) VALUES
(1, 'Quick Food quality feautures   ?       ', 'Quick food quality feautures ', '  1000 Restaurants           ', '<p><img style="width: 51.75px; height: 34.5px;" src="data:image/jpeg;base64,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" data-filename="images.jpg">   Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p><p> </p>', 'icon_documents_alt'),
(2, 'Quick food ', 'Cum doctus civibus efficiantur in imperdiet deterruisset.', '+ 1000 Restaurants', 'Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.', 'icon_pencil'),
(4, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `small` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `small`) VALUES
(1, 'Qui debitis meliore ex, tollit debitis conclusionemque te eos.'),
(2, 'Qui debitis meliore ex, tollit debitis conclusionemque te eos.'),
(3, 'Qui debitis meliore ex, tollit debitis conclusionemque te eos.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_customer_service`
--

CREATE TABLE `contact_customer_service` (
  `id` int(10) NOT NULL,
  `details` varchar(60000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_customer_service`
--

INSERT INTO `contact_customer_service` (`id`, `details`, `phone`, `email`) VALUES
(1, 'Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. Lorem iisque periculis id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te.', '+45 423 445 70', 'customercare@quickfood.com'),
(2, 'Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. Lorem iisque periculis id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te. RUMI', '+45 423 445 70', 'customercare@quickfood.com'),
(3, '<p>Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. Lorem iisque periculis id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te. RUMI <img style="width: 134px;" src="data:image/jpeg;base64,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" data-filename="images.jpg"><br></p>', '+45 423 445 70', 'customercare@quickfood.com'),
(4, '<br><p></p>"&gt;<p>Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. Lorem iisque periculis id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te. RUMI <br></p>', '+45 423 445 70', 'customercare@quickfood.com'),
(5, 'Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. Lorem iisque periculis id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te. RUMI <br><p></p>"&gt;<br><p></p><p><br></p>', '+45 423 445 70', 'customercare@quickfood.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_restutant_service`
--

CREATE TABLE `contact_restutant_service` (
  `id` int(10) NOT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_restutant_service`
--

INSERT INTO `contact_restutant_service` (`id`, `details`, `phone`, `email`) VALUES
(1, 'Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. Ne case constituto pro, ex vis delenit complectitur, per ad everti timeam conclusionemque. Quis voluptaria id per, an nibh atqui vix.', '+45 423 445 99', 'support@quickfood.com'),
(2, '<p>Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. Ne case constituto pro, ex vis delenit complectitur, per ad everti timeam conclusionemque. Quis voluptaria id per, an nibh atqui vix.&nbsp;<img src="data:image/jpeg;base64,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" data-filename="images.jpg" style="width: 134px;"></p>', '+45 423 445 99', 'support@quickfood.com'),
(3, '<p>Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. Ne case constituto pro, ex vis delenit complectitur, per ad everti timeam conclusionemque. Quis voluptaria id per, an nibh atqui vix.&nbsp;</p>', '+45 423 445 99', 'support@quickfood.com');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) NOT NULL,
  `header` varchar(100) DEFAULT NULL,
  `sub_header` varchar(1000) DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `header`, `sub_header`, `details`) VALUES
(1, '        Payments        ', '        Anim pariatur cliche reprehenderit  ? ', 'Anim pariatur cliche reprehenderit, <b>enim</b> eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore '),
(2, 'Payments', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(3, 'How it works', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(4, 'How it works', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(5, 'Delivery delay', 'Anim pariatur cliche reprehenderit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(6, 'Delivery delay', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(7, 'Delivery delay', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(8, 'Delivery delay', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(9, 'Takeaway', 'Anim pariatur cliche reprehenderit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(10, 'Takeaway', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(11, 'Takeaway', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(12, 'Preorder', 'Anim pariatur cliche reprehenderit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(13, 'Preorder', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(14, 'Preorder', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(15, 'Register', 'Anim pariatur cliche reprehenderit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(16, 'Register', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(17, 'Register', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(18, 'Pricing', 'Anim pariatur cliche reprehenderit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(19, 'Pricing', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(20, 'Pricing', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(21, 'Privacy', 'Anim pariatur cliche reprehenderit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(22, 'Privacy', 'Parsnip lotus root celery?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.'),
(23, 'Privacy', 'Beet greens peanut salad?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS.');

-- --------------------------------------------------------

--
-- Table structure for table `home_howitworks_content`
--

CREATE TABLE `home_howitworks_content` (
  `id` int(10) NOT NULL,
  `big` varchar(1000) DEFAULT NULL,
  `small` varchar(10000) DEFAULT NULL,
  `one_big` varchar(1000) DEFAULT NULL,
  `one_small` varchar(10000) DEFAULT NULL,
  `two_big` varchar(1000) DEFAULT NULL,
  `two_small` varchar(10000) DEFAULT NULL,
  `three_big` varchar(1000) DEFAULT NULL,
  `three_small` varchar(10000) DEFAULT NULL,
  `four_big` varchar(1000) DEFAULT NULL,
  `four_small` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_howitworks_content`
--

INSERT INTO `home_howitworks_content` (`id`, `big`, `small`, `one_big`, `one_small`, `two_big`, `two_small`, `three_big`, `three_small`, `four_big`, `four_small`) VALUES
(0, 'this is big ', '', '', '', '', '', '', '', '', ''),
(0, 'How it works', 'Cum doctus civibus efficiantur in imperdiet deterruisset.', 'Search by address', 'Find all restaurants available in your zone.', 'Choose a restaurant', 'We have more than 1000s of menus online', 'Pay by card or cash', 'It''s quick, easy and totally secure.', 'Delivery or takeaway', 'You are lazy? Are you backing home?'),
(1, 'How it works', 'Cum doctus civibus efficiantur in imperdiet deterr...', 'Search by address', 'Find all restaurants available in your zone.', 'Choose a restaurant', 'We have more than 1000s of menus online', 'Pay by card or cash', 'It''s quick, easy and totally secure', 'Delivery or takeaway', 'You are lazy? Are you backing home?');

-- --------------------------------------------------------

--
-- Table structure for table `home_main_content`
--

CREATE TABLE `home_main_content` (
  `id` int(10) NOT NULL,
  `big` varchar(100) DEFAULT NULL,
  `small` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_main_content`
--

INSERT INTO `home_main_content` (`id`, `big`, `small`) VALUES
(1, 'Order Takeaway or Delivery Food', 'Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.'),
(2, 'this is big content', 'this is small content'),
(3, 'this is big content', 'this is small content and thanks for that'),
(4, 'this is big content and thanks ', 'this is small content and thanks for that'),
(5, 'this is big content and thanks ', 'this is small content and thanks for that'),
(6, 'this is big content and thanks a lot ', 'this is small content and thanks for that'),
(7, 'this is big content and thanks a lot ', 'this is small content and thanks for that'),
(8, 'this is big content and thanks a lot ', 'this is small content and thanks for that . ok '),
(9, 'this is big content and thanks a lot ', 'this is small content and thanks for that . ok '),
(10, 'this is big content and thanks a lot ', '<b>this is small content and thanks for that . ok </b>'),
(11, 'this is big content and thanks a lot ', '<p><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsU'),
(12, 'this is big content and thanks a lot ', 'This is small content thanks a lot.<p></p>'),
(13, 'this is big content and thanks a lot ', 'This is small content thanks a lot.<font face="Arial Black">ads</font><p></p>'),
(14, 'this is big content and thanks a lot ', '<p><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsU'),
(15, 'this is big content and thanks a lot ', '<font face="Arial Black">asdasdasdasdas</font><p></p>'),
(16, 'this is big content and thanks a lot ', 'dfsdfsd<b>fdsf<font face="Arial Black">dfsdfsd</font></b>'),
(17, 'this is big content and thanks a lot ', 'this is small content.');

-- --------------------------------------------------------

--
-- Table structure for table `home_resturant_andmore_content`
--

CREATE TABLE `home_resturant_andmore_content` (
  `id` int(11) NOT NULL,
  `resturant` varchar(100) DEFAULT NULL,
  `people_served` varchar(100) DEFAULT NULL,
  `registered_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_resturant_andmore_content`
--

INSERT INTO `home_resturant_andmore_content` (`id`, `resturant`, `people_served`, `registered_user`) VALUES
(1, '2650 Restaurant', '5350 People Served', '12350 Registered Users'),
(3, '2650 Restaurant', '5350 People Served', '12350 Registered Users'),
(12, '2650 Restaurant', '5350 People Served', '12350'),
(13, '2650 Restaurant', '5350 People Served', '12350 Registered Users');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_4`
--

CREATE TABLE `home_section_4` (
  `id` int(10) NOT NULL,
  `big` varchar(1000) DEFAULT NULL,
  `small` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section_4`
--

INSERT INTO `home_section_4` (`id`, `big`, `small`) VALUES
(1, 'Choose from over 2,000 Restaurants', 'Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_5`
--

CREATE TABLE `home_section_5` (
  `id` int(10) NOT NULL,
  `big` varchar(100) DEFAULT NULL,
  `small` varchar(1000) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section_5`
--

INSERT INTO `home_section_5` (`id`, `big`, `small`, `image`) VALUES
(1, 'We also deliver to your office', 'Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.', ''),
(2, 'this is big', '', '15777061_1283400545037215_5109786879746060967_o.jpg'),
(3, 'We also deliver to your office', 'Ridiculus sociosqu cursus neque cursus curae ante ..', '15777061_1283400545037215_5109786879746060967_o.jpg.'),
(4, 'We also deliver to your office', 'Ridiculus sociosqu cursus neque cursus curae ante ..', 'bg_office.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_6`
--

CREATE TABLE `home_section_6` (
  `id` int(10) NOT NULL,
  `big` varchar(100) NOT NULL,
  `small` varchar(100) NOT NULL,
  `submit_big` varchar(100) NOT NULL,
  `submit_small` varchar(1000) NOT NULL,
  `submit_details` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section_6`
--

INSERT INTO `home_section_6` (`id`, `big`, `small`, `submit_big`, `submit_small`, `submit_details`, `image`) VALUES
(1, 'Work with Us', 'Cum doctus civibus efficiantur in imperdiet deterruisset.', 'Submit your Restaurant', 'Start to earn customers', 'Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.', ''),
(2, 'Work with Us', '\nCum doctus civibus efficiantur in imperdiet deterruisset.', 'We are looking for a Driver', 'Start to earn money', 'Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.', ''),
(3, 'Work with Us', 'Cum doctus civibus efficiantur in imperdiet deterruisset.', 'We are looking for a Driver', 'Start to earn money', 'Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.', 'submit_restaurant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(10) NOT NULL,
  `icon_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `icon_name`) VALUES
(1, 'arrow_up'),
(2, 'arrow_down'),
(3, 'arrow_carrot-2up'),
(4, 'arrow_carrot-2down'),
(5, 'icon_close_alt2'),
(6, 'icon_check_alt2'),
(7, 'icon_minus-06'),
(8, 'icon_plus'),
(9, 'icon_close'),
(10, 'icon_box-checked'),
(11, 'icon_circle-empty'),
(12, 'icon_circle-slelected'),
(13, 'icon_menu-circle_alt2'),
(14, 'icon_ul'),
(15, 'icon_ol'),
(16, 'icon_documents_alt'),
(17, 'icon_pencil'),
(18, 'icon_pencil-edit_alt'),
(19, 'icon_mail_alt'),
(20, 'icon_pin_alt'),
(21, 'icon_blocked'),
(22, 'icon_printer'),
(23, 'icon_like'),
(24, 'icon_dislike'),
(25, 'icon_target'),
(26, 'icon_calculator_alt'),
(27, 'icon_building_alt'),
(28, 'icon_floppy_alt'),
(29, 'icon_drive_alt'),
(30, 'con_search_alt'),
(31, 'icon_id_alt'),
(32, 'icon_id-2_alt'),
(33, 'icon_briefcase_alt'),
(34, 'icon_currency_alt'),
(35, 'icon_wallet_alt'),
(36, 'icon_pens_alt'),
(37, 'icon_easel_alt'),
(38, 'icon_datareport_alt'),
(39, 'icon_clipboard'),
(40, 'icon_globe_alt'),
(41, 'icon_clipboard'),
(42, 'icon_datareport_alt'),
(43, 'icon_balance'),
(44, 'icon_calulator'),
(45, 'icon_search'),
(46, 'icon_puzzle'),
(47, 'icon_mug'),
(48, 'icon_flowchart'),
(49, 'icon_shield'),
(50, 'icon_percent'),
(51, 'icon_globe-2'),
(52, 'icon_hourglass'),
(53, 'icon_star_alt'),
(54, 'icon_star-half_alt'),
(55, 'icon_star'),
(56, 'arrow_up_alt'),
(57, 'arrow_down_alt'),
(58, 'con_comment'),
(59, 'icon_chat'),
(60, 'icon_lock-open'),
(61, 'icon_key'),
(62, 'icon_house'),
(63, 'icon_mail'),
(64, 'icon_cone'),
(65, 'icon_bag'),
(66, 'icon_cart'),
(67, 'icon_tag'),
(68, 'icon_trash'),
(69, 'icon_pin'),
(70, 'icon_toolbox'),
(71, 'icon_grid-3x3'),
(72, 'icon_phone'),
(73, 'social_facebook'),
(74, 'social_twitter'),
(75, 'social_pinterest'),
(76, 'social_googleplus'),
(77, 'social_tumblr'),
(78, 'social_skype'),
(79, 'social_youtube'),
(80, 'icon_trash'),
(81, 'icon_refresh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin@123', 'Admin'),
(2, 'rumi', '123', 'User'),
(3, 'akib', '123', 'Res'),
(4, 'mmkkmk', 'kmmkmkm', 'Res'),
(6, '', '', 'Res'),
(7, '', '', 'Res'),
(8, '', '', 'Res'),
(9, '', '', 'Res'),
(10, '', '', 'Res'),
(11, '', '', 'Res'),
(12, '', '', 'Res'),
(13, '', '', 'Res'),
(14, 'asdsad', 'asdsad', 'Res'),
(15, 'asdsad', 'asdsad', 'Res'),
(16, 'asdsad', 'asdsad', 'Res'),
(17, 'mmkkmk', 'kmmkmkm', 'Res'),
(18, 'mmkkmk', 'kmmkmkm', 'Res'),
(19, 'mmkkmk', 'kmmkmkm', 'Res'),
(20, 'mmkkmk', 'kmmkmkm', 'Res'),
(21, 'mmkkmk', 'kmmkmkm', 'Res'),
(22, 'asdsad', 'asdsad', 'Res'),
(23, 'asdsad', 'asdsad', 'Res'),
(24, 'asdsad', 'asdsad', 'Res'),
(25, '', '', 'Res'),
(26, '', '', 'Res'),
(27, '', '', 'Res'),
(28, 'asdsad', 'asdsad', 'Res'),
(29, 'asdsad', 'asdsad', 'Res'),
(30, 'asdsad', 'asdsad', 'Res'),
(31, 'mmkkmk', 'kmmkmkm', 'Res'),
(32, 'mmkkmk', 'kmmkmkm', 'Res'),
(33, 'mmkkmk', 'kmmkmkm', 'Res'),
(34, 'mmkkmk', 'kmmkmkm', 'Res'),
(35, 'mmkkmk', 'kmmkmkm', 'Res'),
(36, 'mmkkmk', 'kmmkmkm', 'Res'),
(37, 'mmkkmk', 'kmmkmkm', 'Res'),
(38, 'mmkkmk', 'kmmkmkm', 'Res'),
(39, 'mmkkmk', 'kmmkmkm', 'Res'),
(40, 'mmkkmk', 'kmmkmkm', 'Res'),
(41, 'dt', '123', 'Res'),
(42, '', '', 'Res'),
(43, 'mmkkmk', 'kmmkmkm', 'Res');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `type_id` varchar(100) NOT NULL,
  `res_name` varchar(1000) NOT NULL,
  `item_type` varchar(1000) NOT NULL,
  `item_name` varchar(1000) DEFAULT NULL,
  `item_description` varchar(10000) DEFAULT NULL,
  `item_price` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `type_id`, `res_name`, `item_type`, `item_name`, `item_description`, `item_price`) VALUES
(60, '6', 'Mexican TacoMex', 'Mexicano', 'acos', 'options of chicken,steak or lamb', '100'),
(62, '6', 'Mexican TacoMex', 'Mexicano', 'burritos', 'options of chicken,steak or lamb', '200'),
(66, '6', 'Naples Pizza', 'Mexicano', 'Empanda', 'options of chicken,steak or lamb', '300'),
(67, '6', 'Naples Pizza', 'Mexicano', 'Chip & Salsa', 'options of chicken,steak or lamb', '400'),
(70, '7', 'Japan Food Sushi ', 'Italiano', ' Pizza ', 'Fuisset mentitum deleniti sit ea', '  200'),
(71, '7', 'Japan Food Sushi ', 'Italiano', 'Stromboli', 'Fuisset mentitum deleniti sit ea', '150'),
(72, '7', 'Japan Food Sushi ', 'Italiano', 'Pasta', 'Fuisset mentitum deleniti sit ea', '250'),
(75, '8', 'Dragon Tower Chinese ', 'Appetizers & Sides', '  Jalapenos Poppers  ', 'Fuisset mentitum deleniti sit ea.\r\n\r\n', '100'),
(76, '8', 'Dragon Tower Chinese ', 'Appetizers & Sides ', ' Fries ', 'Fuisset mentitum deleniti sit ea.\r\n\r\n', ' 550 '),
(78, '8', 'China Food ', 'Appetizers & Sides', 'Wings', 'Fuisset mentitum deleniti sit ea.\r\n\r\n', '300'),
(81, '8', 'China Food ', 'Appetizers & Sides', 'Boneless', 'Fuisset mentitum deleniti sit ea.', '600'),
(82, '8', 'China Food ', 'Appetizers & Sides', 'Regular', 'Fuisset mentitum deleniti sit ea.', '650'),
(83, '8', 'China Food ', 'Appetizers & Sides', 'Chicken Tenders', 'Fuisset mentitum deleniti sit ea.', '120'),
(84, '8', 'Mexican TacoMex', 'Appetizers & Sides', 'Onions Rings', 'Fuisset mentitum deleniti sit ea.', '140'),
(85, '9', 'Mexican TacoMex', 'Burgers ', 'Chicken', 'Fuisset mentitum deleniti sit ea.', '320'),
(86, '9', 'Naples Pizza', 'Burgers ', 'Beef', 'Fuisset mentitum deleniti sit ea.', '240'),
(88, '9', 'Dragon Tower Chinese ', 'Burgers ', ' Lamb ', 'Chorizo & Cheese Chorizo & Cheese', '280 '),
(89, '5', 'Dragon Tower Chinese ', 'Sandwich ', 'Steak & Cheese', 'Chorizo & Cheese Chorizo & Cheese', '340'),
(90, '5', 'Dragon Tower Chinese ', 'Sandwich', 'Chicken', 'Chorizo & Cheese Chorizo & Cheese', '380'),
(91, '5', 'Mexican TacoMex', 'Sandwich', 'Buffalo Chicken', 'Chorizo & Cheese Chorizo & Cheese', '420'),
(92, '5', 'Mexican TacoMex', 'Sandwich', 'Turkey\n', 'options of chicken,steak or lamb', '500'),
(93, '11', 'Rak''s Kitchen  ', 'test', 'chili chicken', 'big', '200');

-- --------------------------------------------------------

--
-- Table structure for table `menu_attribute`
--

CREATE TABLE `menu_attribute` (
  `id` int(10) NOT NULL,
  `type_id` varchar(100) NOT NULL,
  `item_name` varchar(1000) NOT NULL,
  `item_attribute` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `serial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_attribute`
--

INSERT INTO `menu_attribute` (`id`, `type_id`, `item_name`, `item_attribute`, `price`, `serial`) VALUES
(8, '7', 'Pizza', ' Extra Large ', ' 40 ', 1),
(9, '7', 'Pizza', ' Medium ', ' 10 ', 2),
(14, '8', '   Fajitas     ', '     Medium      ', '     100 ', 2),
(37, '5', ' Fajitas    ', '    Medium    ', ' 250 ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`id`, `type`, `details`, `image`) VALUES
(5, 'Sandwich', '-Rak''s Steak & Cheese -Chicken -Buffalo Chicken -Turkey', 'Sandwich.jpg'),
(6, 'Mexicano', 'Tacos(options of chicken,steak or lamb) --burritos(options of chicken steak or lamb) --Empanda(options of Chicken,Steak or Lamb) --Rak''s Chip & Salsa', 'maxicano.jpg'),
(7, 'Italiano', '--Pizza  --Stromboli --Pasta', 'Italian.jpg'),
(8, 'Appetizers & Sides', '-Mozzarella Sticks -Jalapenos Poppers -Fries -Wings --Boneless --Regular  -Chicken Tenders -Onions Rings', 'appetizers-and-sides.jpg'),
(9, 'Burgers', '-Chicken  -Beef  -Lamb', 'burger.jpg'),
(11, 'test', 'this is test', 's8mv_sqp.jpg'),
(12, 'testing', 'qwq', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `type_id` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_attr` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `order_time` varchar(100) NOT NULL,
  `order_day` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `username`, `email`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `type_id`, `item_name`, `item_attr`, `price`, `quantity`, `order_time`, `order_day`, `date`) VALUES
(1, 'rumi1', 'rumi', 'mujtaba.rumi@yahoo.com', 'Mirpur,Shewrapara', 'Dhaka', 'Dhaka', '1216', 'Bangladesh', '01680674598', '8', 'Mozzarella Sticks', '', '350', '2', '04:49:24am', 'Today', '2017-03-30'),
(2, 'rumi1', 'rumi', 'mujtaba.rumi@yahoo.com', 'Mirpur,Shewrapara', 'Dhaka', 'Dhaka', '1216', 'Bangladesh', '01680674598', '8', 'Fries', '', '550', '1', '04:49:24am', 'Today', '2017-03-30'),
(3, 'aaa', 'sss', 'ssd', 'fsdf', 'zccz', 'reer', 'fsd', 'dffsd', 'dsfsd', '8', 'dfsd', 'vcxv', '1000', '5', '4:51 pm', 'tomorrow', '2017-03-28'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-02-23'),
(5, 'rumi1', 'rumi', 'mujtaba.rumi@yahoo.com', 'Mirpur,Shewrapara', 'Dhaka', 'Dhaka', '1216', 'Bangladesh', '01680674598', '8', 'Fries', '', '550', '3', '06:36:32am', '', '2017-04-01'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

CREATE TABLE `order_cart` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `type_id` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_attr` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `order_time` varchar(100) NOT NULL,
  `order_day` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_cart`
--

INSERT INTO `order_cart` (`id`, `name`, `username`, `email`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `type_id`, `item_name`, `item_attr`, `price`, `quantity`, `order_time`, `order_day`, `date`) VALUES
(11, 'rumi1', 'rumi', 'mujtaba.rumi@yahoo.com', 'Mirpur,Shewrapara', 'Dhaka', 'Dhaka', '1216', 'Bangladesh', '01680674598', 8, '  Jalapenos Poppers  ', '', '100', '1', '04:11:30am', '', '2017-04-02 18:00:00'),
(12, 'rumi1', 'rumi', 'mujtaba.rumi@yahoo.com', 'Mirpur,Shewrapara', 'Dhaka', 'Dhaka', '1216', 'Bangladesh', '01680674598', 8, 'Wings', '', '300', '1', '04:11:30am', '', '2017-04-02 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `website` varchar(1000) NOT NULL,
  `time` varchar(1000) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `vat` varchar(1000) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `type`, `address`, `city`, `state`, `postal_code`, `country`, `website`, `time`, `email`, `username`, `password`, `vat`, `status`, `Image`) VALUES
(1, 'Rak''s Kitchen  ', '   Mexican/American   ', '135 Newtownards Road, Belfast, BT4 1AB   ', '   Belfast   ', '   Belfast   ', '   222   ', '   American   ', 'www.tarka.com', '   American   ', 'tarka@gmail.com', 'admin', '   admin   ', '  20%  ', '   American   ', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_details`
--

CREATE TABLE `restaurant_details` (
  `id` int(11) NOT NULL,
  `res_id` int(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_details`
--

INSERT INTO `restaurant_details` (`id`, `res_id`, `description`, `time`) VALUES
(1, 1, '<p>my own resturant</p>', '9:00 am - 5:00 pm'),
(2, 9, '<p>my own resturant</p>', '9:00 am - 5:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `res_comment`
--

CREATE TABLE `res_comment` (
  `id` int(100) NOT NULL,
  `res_id` int(100) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `comment` text,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_comment`
--

INSERT INTO `res_comment` (`id`, `res_id`, `username`, `comment`, `Date`) VALUES
(1, 1, 'rumi', 'good', '0000-00-00'),
(2, 1, 'akib', 'very good', '2017-03-29'),
(4, 0, 'rumi', 'excellent', NULL),
(5, 0, 'rumi', 'as', '2017-03-29'),
(6, 0, 'rumi', 'a', '2017-03-29'),
(7, 1, 'rumi', 'sadas', '2017-03-29'),
(8, 1, 'rumi', 'rumi', '2017-03-29'),
(9, 1, 'rumi', '321', '2017-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `res_rating`
--

CREATE TABLE `res_rating` (
  `id` int(50) NOT NULL,
  `res_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_rating`
--

INSERT INTO `res_rating` (`id`, `res_id`, `username`, `rating`) VALUES
(1, '66', 'rumi', 3),
(2, '67', '', 3),
(3, '81', '', 3),
(4, '80', '', 3),
(5, '74', '', 4),
(6, '63', '', 5),
(7, '65', '', 2),
(8, '81', '', 4),
(9, '74', 'rumi', 2),
(10, '75', 'rumi', 1),
(11, '75', 'rumi', 1),
(12, '74', 'rumi', 2),
(13, '74', 'rumi', 5),
(14, '76', 'rumi', 5),
(15, '75', 'rumi', 1),
(16, '75', 'rumi', 2),
(17, '82', 'rumi', 2),
(18, '76', 'rumi', 3),
(19, '74', 'rumi', 1),
(20, '74', 'rumi', 1),
(21, '75', 'rumi', 2),
(22, '74', 'admin', 5),
(23, '75', 'admin', 5),
(24, '86', 'admin', 5),
(25, '76', 'admin', 5),
(26, '74', 'admin', 5),
(27, '74', 'admin', 5),
(28, '81', 'admin', 5),
(29, '74', 'admin', 5),
(30, '74', 'admin', 5),
(31, '85', 'admin', 5),
(32, '74', 'admin', 5),
(33, '74', 'admin', 5),
(34, '78', 'admin', 5),
(35, '76', 'admin', 5),
(36, '75', 'admin', 3),
(37, '75', 'admin', 5),
(38, '74', 'admin', 2),
(39, '1', 'rumi', 4),
(40, '1', 'rumi', 4),
(41, '1', 'rumi', 5),
(42, '88', 'rumi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_address` varchar(1000) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `username`, `password`, `full_address`, `city`, `state`, `postcode`, `country`) VALUES
(30, 'rumi1', 'mujtaba.rumi@yahoo.com', '01680674598', 'rumi', '123', 'Mirpur,Shewrapara', 'Dhaka', 'Dhaka', '1216', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_banner`
--
ALTER TABLE `about_us_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_details`
--
ALTER TABLE `about_us_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_feature`
--
ALTER TABLE `about_us_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_customer_service`
--
ALTER TABLE `contact_customer_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_restutant_service`
--
ALTER TABLE `contact_restutant_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_main_content`
--
ALTER TABLE `home_main_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_resturant_andmore_content`
--
ALTER TABLE `home_resturant_andmore_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_4`
--
ALTER TABLE `home_section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_5`
--
ALTER TABLE `home_section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_6`
--
ALTER TABLE `home_section_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_attribute`
--
ALTER TABLE `menu_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cart`
--
ALTER TABLE `order_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_comment`
--
ALTER TABLE `res_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_rating`
--
ALTER TABLE `res_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `about_us_banner`
--
ALTER TABLE `about_us_banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_us_details`
--
ALTER TABLE `about_us_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `about_us_feature`
--
ALTER TABLE `about_us_feature`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_customer_service`
--
ALTER TABLE `contact_customer_service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_restutant_service`
--
ALTER TABLE `contact_restutant_service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `home_main_content`
--
ALTER TABLE `home_main_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `home_resturant_andmore_content`
--
ALTER TABLE `home_resturant_andmore_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `home_section_4`
--
ALTER TABLE `home_section_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_section_5`
--
ALTER TABLE `home_section_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `home_section_6`
--
ALTER TABLE `home_section_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `menu_attribute`
--
ALTER TABLE `menu_attribute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_cart`
--
ALTER TABLE `order_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `res_comment`
--
ALTER TABLE `res_comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `res_rating`
--
ALTER TABLE `res_rating`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
