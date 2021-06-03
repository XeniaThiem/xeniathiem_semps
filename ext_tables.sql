CREATE TABLE pages (
	xeniathiem_semps_title varchar(255) NOT NULL DEFAULT '',
	xeniathiem_semps_description text,
	xeniathiem_semps_gallery int(11) unsigned NOT NULL default '0',
	xeniathiem_semps_teaserimage int(11) unsigned NOT NULL default '0',
	xeniathiem_semps_mother int(11) NOT NULL default '0',
	xeniathiem_semps_year int(11) NOT NULL default '0',
	xeniathiem_semps_colors int(11) NOT NULL default '0',
	xeniathiem_semps_breeders int(11) NOT NULL default '0',
	xeniathiem_semps_categories int(11) NOT NULL default '0',
	xeniathiem_semps_tags int(11) NOT NULL default '0',
	xeniathiem_semps_families int(11) NOT NULL default '0',
);

CREATE TABLE tx_xeniathiemsemps_domain_model_semps (
	name varchar(255) DEFAULT '' NOT NULL,
	teaserimage int(11) unsigned NOT NULL default '0',
	gallery int(11) unsigned NOT NULL default '0'
);

CREATE TABLE tx_xeniathiemsemps_domain_model_color (
	name varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_xeniathiemsemps_domain_model_breeder (
	name varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_xeniathiemsemps_domain_model_family (
	name varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_xeniathiemsemps_domain_model_category (
	name varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_xeniathiemsemps_domain_model_tag (
	name varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_xeniathiemsemps_domain_model_pages_tags_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

CREATE TABLE tx_xeniathiemsemps_domain_model_breeder_pages_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

CREATE TABLE tx_xeniathiemsemps_domain_model_category_pages_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

CREATE TABLE tx_xeniathiemsemps_domain_model_colors_pages_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

CREATE TABLE tx_xeniathiemsemps_domain_model_families_pages_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

CREATE TABLE tx_xeniathiemsemps_domain_model_pages_pages_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
