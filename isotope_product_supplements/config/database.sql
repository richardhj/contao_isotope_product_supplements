-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the Contao    *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


--
-- Table `tl_iso_groups`
--

CREATE TABLE `tl_iso_groups` (
  `supplement_activate` char(1) NOT NULL default '',
  `supplements` blob NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
