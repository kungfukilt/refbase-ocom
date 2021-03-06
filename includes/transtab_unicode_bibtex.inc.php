<?php
	// Project:    Web Reference Database (refbase) <http://www.refbase.net>
	// Copyright:  Matthias Steffens <mailto:refbase@extracts.de> and the file's
	//             original author(s).
	//
	//             This code is distributed in the hope that it will be useful,
	//             but WITHOUT ANY WARRANTY. Please see the GNU General Public
	//             License for more details.
	//
	// File:       ./includes/transtab_unicode_bibtex.inc.php
	// Repository: $HeadURL: http://svn.code.sf.net/p/refbase/code/trunk/includes/transtab_unicode_bibtex.inc.php $
	// Author(s):  Matthias Steffens <mailto:refbase@extracts.de>
	//
	// Created:    28-May-06, 12:39
	// Modified:   $Date: 2007-02-16 17:10:14 -0800 (Fri, 16 Feb 2007) $
	//             $Author: msteffens $
	//             $Revision: 894 $

	// This is a translation table for best-effort conversion from Unicode to LaTeX/BibTeX entities. It contains a comprehensive list of substitution strings for Unicode characters,
	// which can be used with the 'T1' font encoding. Uses commands from the 'textcomp' package. Characters that can't be matched are converted to ASCII equivalents.
	// Adopted from 'transtab' by Markus Kuhn
	// (transtab.utf v1.8 2000-10-12 11:01:28+01 mgk25 Exp); see <http://www.cl.cam.ac.uk/~mgk25/unicode.html> for more info about Unicode and transtab.

	$transtab_unicode_bibtex = array(

		// NUMBER SIGN
		"(?<!\\\\)#" => '$\\#$',
		// <U0023> <U0023>

		// PERCENT SIGN
		"(?<!\\\\)%" => "\\%",
		// <U0025> <U0025>

		// AMPERSAND
//		"(?<!\\\\)&" => "\\&", // encoding of ampersands is already handled by bibutils (which handles it better since it excludes ampersands in URLs from encoding)
		// <U0026> <U0026>

		// APOSTROPHE
		"(?<!\\\\)'" => "{\\textquoteright}",
		// <U0027> <U2019>

		// GRAVE ACCENT
		"(?<!\\\\)`" => "{\\textquoteleft}",
		// <U0060> <U201B>;<U2018>

		// NO-BREAK SPACE
		" " => "~",
		// <U00A0> <U0020>

		// INVERTED EXCLAMATION MARK
		"¡" => "{\\textexclamdown}",
		// <U00A1> <U0021>

		// CENT SIGN
		"¢" => "{\\textcent}",
		// <U00A2> <U0063>

		// POUND SIGN
		"£" => "{\\textsterling}",
		// <U00A3> "<U0047><U0042><U0050>"

		// YEN SIGN
		"¥" => "{\\textyen}",
		// <U00A5> <U0059>

		// BROKEN BAR
		"¦" => "{\\textbrokenbar}",
		// <U00A6> <U007C>

		// SECTION SIGN
		"§" => "{\\textsection}",
		// <U00A7> <U0053>

		// DIAERESIS
		"¨" => "{\\textasciidieresis}",
		// <U00A8> <U0022>

		// COPYRIGHT SIGN
		"©" => "{\\textcopyright}",
		// <U00A9> "<U0028><U0063><U0029>";<U0063>

		// FEMININE ORDINAL INDICATOR
		"ª" => "{\\textordfeminine}",
		// <U00AA> <U0061>

		// LEFT-POINTING DOUBLE ANGLE QUOTATION MARK
		"«" => "{\\guillemotleft}",
		// <U00AB> "<U003C><U003C>"

		// NOT SIGN
		"¬" => "{\\textlnot}",
		// <U00AC> <U002D>

		// SOFT HYPHEN
		"­" => "-", // correct?
		// <U00AD> <U002D>

		// REGISTERED SIGN
		"®" => "{\\textregistered}",
		// <U00AE> "<U0028><U0052><U0029>"

		// MACRON
		"¯" => "{\\textasciimacron}",
		// <U00AF> <U002D>

		// DEGREE SIGN
		"°" => "{\\textdegree}",
		// <U00B0> <U0020>

		// PLUS-MINUS SIGN
		"±" => "{\\textpm}",
		// <U00B1> "<U002B><U002F><U002D>"

		// SUPERSCRIPT TWO
		"²" => "{\\texttwosuperior}",
		// <U00B2> "<U005E><U0032>";<U0032>

		// SUPERSCRIPT THREE
		"³" => "{\\textthreesuperior}",
		// <U00B3> "<U005E><U0033>";<U0033>

		// ACUTE ACCENT
		"´" => "{\\textasciiacute}",
		// <U00B4> <U0027>

		// MICRO SIGN
		"µ" => "{\\textmu}",
		// <U00B5> <U03BC>;<U0075>

		// PILCROW SIGN
		"¶" => "{\\textparagraph}",
		// <U00B6> <U0050>

		// MIDDLE DOT
		"·" => "{\\textperiodcentered}",
		// <U00B7> <U002E>

		// CEDILLA
		"¸" => "{\\c\\ }",
		// <U00B8> <U002C>

		// SUPERSCRIPT ONE
		"¹" => "{\\textonesuperior}",
		// <U00B9> "<U005E><U0031>";<U0031>

		// MASCULINE ORDINAL INDICATOR
		"º" => "{\\textordmasculine}",
		// <U00BA> <U006F>

		// RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK
		"»" => "{\\guillemotright}",
		// <U00BB> "<U003E><U003E>"

		// VULGAR FRACTION ONE QUARTER
		"¼" => "{\\textonequarter}",
		// <U00BC> "<U0020><U0031><U002F><U0034>"

		// VULGAR FRACTION ONE HALF
		"½" => "{\\textonehalf}",
		// <U00BD> "<U0020><U0031><U002F><U0032>"

		// VULGAR FRACTION THREE QUARTERS
		"¾" => "{\\textthreequarters}",
		// <U00BE> "<U0020><U0033><U002F><U0034>"

		// INVERTED QUESTION MARK
		"¿" => "{\\textquestiondown}",
		// <U00BF> <U003F>

		// LATIN CAPITAL LETTER A WITH GRAVE
		"À" => "{\\`A}", // \symbol{"C0}
		// <U00C0> <U0041>

		// LATIN CAPITAL LETTER A WITH ACUTE
		"Á" => "{\\'A}", // \symbol{"C1}
		// <U00C1> <U0041>

		// LATIN CAPITAL LETTER A WITH CIRCUMFLEX
		"Â" => "{\\^A}", // \symbol{"C2}
		// <U00C2> <U0041>

		// LATIN CAPITAL LETTER A WITH TILDE
		"Ã" => "{\\~A}", // \symbol{"C3}
		// <U00C3> <U0041>

		// LATIN CAPITAL LETTER A WITH DIAERESIS
		"Ä" => "{\\\"A}", // \symbol{"C4}
		// <U00C4> "<U0041><U0065>";<U0041>

		// LATIN CAPITAL LETTER A WITH RING ABOVE
		"Å" => "{\\r A}", // "\\AA" // \symbol{"C5}
		// <U00C5> "<U0041><U0061>";<U0041>

		// LATIN CAPITAL LETTER AE
		"Æ" => "{\\AE}", // \symbol{"C6}
		// <U00C6> "<U0041><U0045>";<U0041>

		// LATIN CAPITAL LETTER C WITH CEDILLA
		"Ç" => "{\\c C}", // \symbol{"C7}
		// <U00C7> <U0043>

		// LATIN CAPITAL LETTER E WITH GRAVE
		"È" => "{\\`E}", // \symbol{"C8}
		// <U00C8> <U0045>

		// LATIN CAPITAL LETTER E WITH ACUTE
		"É" => "{\\'E}", // \symbol{"C9}
		// <U00C9> <U0045>

		// LATIN CAPITAL LETTER E WITH CIRCUMFLEX
		"Ê" => "{\\^E}", // \symbol{"CA}
		// <U00CA> <U0045>

		// LATIN CAPITAL LETTER E WITH DIAERESIS
		"Ë" => "{\\\"E}", // \symbol{"CB}
		// <U00CB> <U0045>

		// LATIN CAPITAL LETTER I WITH GRAVE
		"Ì" => "{\\`I}", // \symbol{"CC}
		// <U00CC> <U0049>

		// LATIN CAPITAL LETTER I WITH ACUTE
		"Í" => "{\\'I}", // \symbol{"CD}
		// <U00CD> <U0049>

		// LATIN CAPITAL LETTER I WITH CIRCUMFLEX
		"Î" => "{\\^I}", // \symbol{"CE}
		// <U00CE> <U0049>

		// LATIN CAPITAL LETTER I WITH DIAERESIS
		"Ï" => "{\\\"I}", // \symbol{"CF}
		// <U00CF> <U0049>

		// LATIN CAPITAL LETTER ETH
		"Ð" => "{\\DH}", // \symbol{"D0}
		// <U00D0> <U0044>

		// LATIN CAPITAL LETTER N WITH TILDE
		"Ñ" => "{\\~N}", // \symbol{"D1}
		// <U00D1> <U004E>

		// LATIN CAPITAL LETTER O WITH GRAVE
		"Ò" => "{\\`O}", // \symbol{"D2}
		// <U00D2> <U004F>

		// LATIN CAPITAL LETTER O WITH ACUTE
		"Ó" => "{\\'O}", // \symbol{"D3}
		// <U00D3> <U004F>

		// LATIN CAPITAL LETTER O WITH CIRCUMFLEX
		"Ô" => "{\\^O}", // \symbol{"D4}
		// <U00D4> <U004F>

		// LATIN CAPITAL LETTER O WITH TILDE
		"Õ" => "{\\~O}", // \symbol{"D5}
		// <U00D5> <U004F>

		// LATIN CAPITAL LETTER O WITH DIAERESIS
		"Ö" => "{\\\"O}", // \symbol{"D6}
		// <U00D6> "<U004F><U0065>";<U004F>

		// MULTIPLICATION SIGN
		"×" => "{\\texttimes}", // \symbol{"D7}
		// <U00D7> <U0078>

		// LATIN CAPITAL LETTER O WITH STROKE
		"Ø" => "{\\O}", // \symbol{"D8}
		// <U00D8> <U004F>

		// LATIN CAPITAL LETTER U WITH GRAVE
		"Ù" => "{\\`U}", // \symbol{"D9}
		// <U00D9> <U0055>

		// LATIN CAPITAL LETTER U WITH ACUTE
		"Ú" => "{\\'U}", // \symbol{"DA}
		// <U00DA> <U0055>

		// LATIN CAPITAL LETTER U WITH CIRCUMFLEX
		"Û" => "{\\^U}", // \symbol{"DB}
		// <U00DB> <U0055>

		// LATIN CAPITAL LETTER U WITH DIAERESIS
		"Ü" => "{\\\"U}", // \symbol{"DC}
		// <U00DC> "<U0055><U0065>";<U0055>

		// LATIN CAPITAL LETTER Y WITH ACUTE
		"Ý" => "{\\'Y}", // \symbol{"DD}
		// <U00DD> <U0059>

		// LATIN CAPITAL LETTER THORN
		"Þ" => "{\\TH}", // \symbol{"DE}
		// <U00DE> "<U0054><U0068>"

		// LATIN SMALL LETTER SHARP S
		"ß" => "{\\ss}", // \symbol{"DF}
		// <U00DF> "<U0073><U0073>";<U03B2>

		// LATIN SMALL LETTER A WITH GRAVE
		"à" => "{\\`a}", // \symbol{"E0}
		// <U00E0> <U0061>

		// LATIN SMALL LETTER A WITH ACUTE
		"á" => "{\\'a}", // \symbol{"E1}
		// <U00E1> <U0061>

		// LATIN SMALL LETTER A WITH CIRCUMFLEX
		"â" => "{\\^a}", // \symbol{"E2}
		// <U00E2> <U0061>

		// LATIN SMALL LETTER A WITH TILDE
		"ã" => "{\\~a}", // \symbol{"E3}
		// <U00E3> <U0061>

		// LATIN SMALL LETTER A WITH DIAERESIS
		"ä" => "{\\\"a}", // \symbol{"E4}
		// <U00E4> "<U0061><U0065>";<U0061>

		// LATIN SMALL LETTER A WITH RING ABOVE
		"å" => "{\\r a}", // "\\aa" // \symbol{"E5}
		// <U00E5> "<U0061><U0061>";<U0061>

		// LATIN SMALL LETTER AE
		"æ" => "{\\ae}", // \symbol{"E6}
		// <U00E6> "<U0061><U0065>";<U0061>

		// LATIN SMALL LETTER C WITH CEDILLA
		"ç" => "{\\c c}", // \symbol{"E7}
		// <U00E7> <U0063>

		// LATIN SMALL LETTER E WITH GRAVE
		"è" => "{\\`e}", // \symbol{"E8}
		// <U00E8> <U0065>

		// LATIN SMALL LETTER E WITH ACUTE
		"é" => "{\\'e}", // \symbol{"E9}
		// <U00E9> <U0065>

		// LATIN SMALL LETTER E WITH CIRCUMFLEX
		"ê" => "{\\^e}", // \symbol{"EA}
		// <U00EA> <U0065>

		// LATIN SMALL LETTER E WITH DIAERESIS
		"ë" => "{\\\"e}", // \symbol{"EB}
		// <U00EB> <U0065>

		// LATIN SMALL LETTER I WITH GRAVE
		"ì" => "{\\`\\i}", // \symbol{"EC}
		// <U00EC> <U0069>

		// LATIN SMALL LETTER I WITH ACUTE
		"í" => "{\\'\\i}", // \symbol{"ED}
		// <U00ED> <U0069>

		// LATIN SMALL LETTER I WITH CIRCUMFLEX
		"î" => "{\\^\\i}", // \symbol{"EE}
		// <U00EE> <U0069>

		// LATIN SMALL LETTER I WITH DIAERESIS
		"ï" => "{\\\"\\i}", // \symbol{"EF}
		// <U00EF> <U0069>

		// LATIN SMALL LETTER ETH
		"ð" => "{\\dh}", // \symbol{"F0}
		// <U00F0> <U0064>

		// LATIN SMALL LETTER N WITH TILDE
		"ñ" => "{\\~n}", // \symbol{"F1}
		// <U00F1> <U006E>

		// LATIN SMALL LETTER O WITH GRAVE
		"ò" => "{\\`o}", // \symbol{"F2}
		// <U00F2> <U006F>

		// LATIN SMALL LETTER O WITH ACUTE
		"ó" => "{\\'o}", // \symbol{"F3}
		// <U00F3> <U006F>

		// LATIN SMALL LETTER O WITH CIRCUMFLEX
		"ô" => "{\\^o}", // \symbol{"F4}
		// <U00F4> <U006F>

		// LATIN SMALL LETTER O WITH TILDE
		"õ" => "{\\~o}", // \symbol{"F5}
		// <U00F5> <U006F>

		// LATIN SMALL LETTER O WITH DIAERESIS
		"ö" => "{\\\"o}", // \symbol{"F6}
		// <U00F6> "<U006F><U0065>";<U006F>

		// DIVISION SIGN
		"÷" => "{\\textdiv}", // \symbol{"F7}
		// <U00F7> <U003A>

		// LATIN SMALL LETTER O WITH STROKE
		"ø" => "{\\o}", // \symbol{"F8}
		// <U00F8> <U006F>

		// LATIN SMALL LETTER U WITH GRAVE
		"ù" => "{\\`u}", // \symbol{"F9}
		// <U00F9> <U0075>

		// LATIN SMALL LETTER U WITH ACUTE
		"ú" => "{\\'u}", // \symbol{"FA}
		// <U00FA> <U0075>

		// LATIN SMALL LETTER U WITH CIRCUMFLEX
		"û" => "{\\^u}", // \symbol{"FB}
		// <U00FB> <U0075>

		// LATIN SMALL LETTER U WITH DIAERESIS
		"ü" => "{\\\"u}", // \symbol{"FC}
		// <U00FC> "<U0075><U0065>";<U0075>

		// LATIN SMALL LETTER Y WITH ACUTE
		"ý" => "{\\'y}", // \symbol{"FD}
		// <U00FD> <U0079>

		// LATIN SMALL LETTER THORN
		"þ" => "{\\th}", // \symbol{"FE}
		// <U00FE> "<U0074><U0068>"

		// LATIN SMALL LETTER Y WITH DIAERESIS
		"ÿ" => "{\\\"y}", // \symbol{"FF}
		// <U00FF> <U0079>

		// LATIN CAPITAL LETTER A WITH MACRON
		"Ā" => "A",
		// <U0100> <U0041>

		// LATIN SMALL LETTER A WITH MACRON
		"ā" => "a",
		// <U0101> <U0061>

		// LATIN CAPITAL LETTER A WITH BREVE
		"Ă" => "{\\u A}",
		// <U0102> <U0041>

		// LATIN SMALL LETTER A WITH BREVE
		"ă" => "{\\u a}",
		// <U0103> <U0061>

		// LATIN CAPITAL LETTER A WITH OGONEK
		"Ą" => "{\\k A}",
		// <U0104> <U0041>

		// LATIN SMALL LETTER A WITH OGONEK
		"ą" => "{\\k a}",
		// <U0105> <U0061>

		// LATIN CAPITAL LETTER C WITH ACUTE
		"Ć" => "{\\'C}",
		// <U0106> <U0043>

		// LATIN SMALL LETTER C WITH ACUTE
		"ć" => "{\\'c}",
		// <U0107> <U0063>

		// LATIN CAPITAL LETTER C WITH CIRCUMFLEX
		"Ĉ" => "Ch", // "C"
		// <U0108> "<U0043><U0068>";<U0043>

		// LATIN SMALL LETTER C WITH CIRCUMFLEX
		"ĉ" => "ch", // "c"
		// <U0109> "<U0063><U0068>";<U0063>

		// LATIN CAPITAL LETTER C WITH DOT ABOVE
		"Ċ" => "C",
		// <U010A> <U0043>

		// LATIN SMALL LETTER C WITH DOT ABOVE
		"ċ" => "c",
		// <U010B> <U0063>

		// LATIN CAPITAL LETTER C WITH CARON
		"Č" => "{\\v C}",
		// <U010C> <U0043>

		// LATIN SMALL LETTER C WITH CARON
		"č" => "{\\v c}",
		// <U010D> <U0063>

		// LATIN CAPITAL LETTER D WITH CARON
		"Ď" => "{\\v D}",
		// <U010E> <U0044>

		// LATIN SMALL LETTER D WITH CARON
		"ď" => "{\\v d}",
		// <U010F> <U0064>

		// LATIN CAPITAL LETTER D WITH STROKE
		"Đ" => "{\\DJ}",
		// <U0110> <U0044>

		// LATIN SMALL LETTER D WITH STROKE
		"đ" => "{\\dj}",
		// <U0111> <U0064>

		// LATIN CAPITAL LETTER E WITH MACRON
		"Ē" => "E",
		// <U0112> <U0045>

		// LATIN SMALL LETTER E WITH MACRON
		"ē" => "e",
		// <U0113> <U0065>

		// LATIN CAPITAL LETTER E WITH BREVE
		"Ĕ" => "E",
		// <U0114> <U0045>

		// LATIN SMALL LETTER E WITH BREVE
		"ĕ" => "e",
		// <U0115> <U0065>

		// LATIN CAPITAL LETTER E WITH DOT ABOVE
		"Ė" => "E",
		// <U0116> <U0045>

		// LATIN SMALL LETTER E WITH DOT ABOVE
		"ė" => "e",
		// <U0117> <U0065>

		// LATIN CAPITAL LETTER E WITH OGONEK
		"Ę" => "{\\k E}",
		// <U0118> <U0045>

		// LATIN SMALL LETTER E WITH OGONEK
		"ę" => "{\\k e}",
		// <U0119> <U0065>

		// LATIN CAPITAL LETTER E WITH CARON
		"Ě" => "{\\v E}",
		// <U011A> <U0045>

		// LATIN SMALL LETTER E WITH CARON
		"ě" => "{\\v e}",
		// <U011B> <U0065>

		// LATIN CAPITAL LETTER G WITH CIRCUMFLEX
		"Ĝ" => "Gh", // "G"
		// <U011C> "<U0047><U0068>";<U0047>

		// LATIN SMALL LETTER G WITH CIRCUMFLEX
		"ĝ" => "gh", // "g"
		// <U011D> "<U0067><U0068>";<U0067>

		// LATIN CAPITAL LETTER G WITH BREVE
		"Ğ" => "{\\u G}",
		// <U011E> <U0047>

		// LATIN SMALL LETTER G WITH BREVE
		"ğ" => "{\\u g}",
		// <U011F> <U0067>

		// LATIN CAPITAL LETTER G WITH DOT ABOVE
		"Ġ" => "G",
		// <U0120> <U0047>

		// LATIN SMALL LETTER G WITH DOT ABOVE
		"ġ" => "g",
		// <U0121> <U0067>

		// LATIN CAPITAL LETTER G WITH CEDILLA
		"Ģ" => "G",
		// <U0122> <U0047>

		// LATIN SMALL LETTER G WITH CEDILLA
		"ģ" => "g",
		// <U0123> <U0067>

		// LATIN CAPITAL LETTER H WITH CIRCUMFLEX
		"Ĥ" => "Hh", // "H"
		// <U0124> "<U0048><U0068>";<U0048>

		// LATIN SMALL LETTER H WITH CIRCUMFLEX
		"ĥ" => "hh", // "h"
		// <U0125> "<U0068><U0068>";<U0068>

		// LATIN CAPITAL LETTER H WITH STROKE
		"Ħ" => "H",
		// <U0126> <U0048>

		// LATIN SMALL LETTER H WITH STROKE
		"ħ" => "h",
		// <U0127> <U0068>

		// LATIN CAPITAL LETTER I WITH TILDE
		"Ĩ" => "I",
		// <U0128> <U0049>

		// LATIN SMALL LETTER I WITH TILDE
		"ĩ" => "i",
		// <U0129> <U0069>

		// LATIN CAPITAL LETTER I WITH MACRON
		"Ī" => "I",
		// <U012A> <U0049>

		// LATIN SMALL LETTER I WITH MACRON
		"ī" => "i",
		// <U012B> <U0069>

		// LATIN CAPITAL LETTER I WITH BREVE
		"Ĭ" => "I",
		// <U012C> <U0049>

		// LATIN SMALL LETTER I WITH BREVE
		"ĭ" => "i",
		// <U012D> <U0069>

		// LATIN CAPITAL LETTER I WITH OGONEK
		"Į" => "I",
		// <U012E> <U0049>

		// LATIN SMALL LETTER I WITH OGONEK
		"į" => "i",
		// <U012F> <U0069>

		// LATIN CAPITAL LETTER I WITH DOT ABOVE
		"İ" => "{\\.I}",
		// <U0130> <U0049>

		// LATIN SMALL LETTER DOTLESS I
		"ı" => "{\\i}",
		// <U0131> <U0069>

		// LATIN CAPITAL LIGATURE IJ
		"Ĳ" => "IJ",
		// <U0132> "<U0049><U004A>"

		// LATIN SMALL LIGATURE IJ
		"ĳ" => "ij",
		// <U0133> "<U0069><U006A>"

		// LATIN CAPITAL LETTER J WITH CIRCUMFLEX
		"Ĵ" => "Jh", // "J"
		// <U0134> "<U004A><U0068>";<U004A>

		// LATIN SMALL LETTER J WITH CIRCUMFLEX
		"ĵ" => "jh", // "j"
		// <U0135> "<U006A><U0068>";<U006A>

		// LATIN CAPITAL LETTER K WITH CEDILLA
		"Ķ" => "K",
		// <U0136> <U004B>

		// LATIN SMALL LETTER K WITH CEDILLA
		"ķ" => "k",
		// <U0137> <U006B>

		// LATIN SMALL LETTER KRA
		"ĸ" => "k",
		// <U0138> <U006B>

		// LATIN CAPITAL LETTER L WITH ACUTE
		"Ĺ" => "{\\'L}",
		// <U0139> <U004C>

		// LATIN SMALL LETTER L WITH ACUTE
		"ĺ" => "{\\'l}",
		// <U013A> <U006C>

		// LATIN CAPITAL LETTER L WITH CEDILLA
		"Ļ" => "L",
		// <U013B> <U004C>

		// LATIN SMALL LETTER L WITH CEDILLA
		"ļ" => "l",
		// <U013C> <U006C>

		// LATIN CAPITAL LETTER L WITH CARON
		"Ľ" => "{\\v L}",
		// <U013D> <U004C>

		// LATIN SMALL LETTER L WITH CARON
		"ľ" => "{\\v l}",
		// <U013E> <U006C>

		// LATIN CAPITAL LETTER L WITH MIDDLE DOT
		"Ŀ" => "L·", // "L.", "L"
		// <U013F> "<U004C><U00B7>";"<U004C><U002E>";<U004C>

		// LATIN SMALL LETTER L WITH MIDDLE DOT
		"ŀ" => "l·", // "l.", "l"
		// <U0140> "<U006C><U00B7>";"<U006C><U002E>";<U006C>

		// LATIN CAPITAL LETTER L WITH STROKE
		"Ł" => "{\\L}",
		// <U0141> <U004C>

		// LATIN SMALL LETTER L WITH STROKE
		"ł" => "{\\l}",
		// <U0142> <U006C>

		// LATIN CAPITAL LETTER N WITH ACUTE
		"Ń" => "{\\'N}",
		// <U0143> <U004E>

		// LATIN SMALL LETTER N WITH ACUTE
		"ń" => "{\\'n}",
		// <U0144> <U006E>

		// LATIN CAPITAL LETTER N WITH CEDILLA
		"Ņ" => "N",
		// <U0145> <U004E>

		// LATIN SMALL LETTER N WITH CEDILLA
		"ņ" => "n",
		// <U0146> <U006E>

		// LATIN CAPITAL LETTER N WITH CARON
		"Ň" => "{\\v N}",
		// <U0147> <U004E>

		// LATIN SMALL LETTER N WITH CARON
		"ň" => "{\\v n}",
		// <U0148> <U006E>

		// LATIN SMALL LETTER N PRECEDED BY APOSTROPHE
		"ŉ" => "'n",
		// <U0149> "<U0027><U006E>"

		// LATIN CAPITAL LETTER ENG
		"Ŋ" => "{\\NG}", // "N"
		// <U014A> "<U004E><U0047>";<U004E>

		// LATIN SMALL LETTER ENG
		"ŋ" => "{\\ng}", // "n"
		// <U014B> "<U006E><U0067>";<U006E>

		// LATIN CAPITAL LETTER O WITH MACRON
		"Ō" => "O",
		// <U014C> <U004F>

		// LATIN SMALL LETTER O WITH MACRON
		"ō" => "o",
		// <U014D> <U006F>

		// LATIN CAPITAL LETTER O WITH BREVE
		"Ŏ" => "O",
		// <U014E> <U004F>

		// LATIN SMALL LETTER O WITH BREVE
		"ŏ" => "o",
		// <U014F> <U006F>

		// LATIN CAPITAL LETTER O WITH DOUBLE ACUTE
		"Ő" => "{\\H O}",
		// <U0150> <U004F>

		// LATIN SMALL LETTER O WITH DOUBLE ACUTE
		"ő" => "{\\H o}",
		// <U0151> <U006F>

		// LATIN CAPITAL LIGATURE OE
		"Œ" => "{\\OE}",
		// <U0152> "<U004F><U0045>"

		// LATIN SMALL LIGATURE OE
		"œ" => "{\\oe}",
		// <U0153> "<U006F><U0065>"

		// LATIN CAPITAL LETTER R WITH ACUTE
		"Ŕ" => "{\\'R}",
		// <U0154> <U0052>

		// LATIN SMALL LETTER R WITH ACUTE
		"ŕ" => "{\\'r}",
		// <U0155> <U0072>

		// LATIN CAPITAL LETTER R WITH CEDILLA
		"Ŗ" => "R",
		// <U0156> <U0052>

		// LATIN SMALL LETTER R WITH CEDILLA
		"ŗ" => "r",
		// <U0157> <U0072>

		// LATIN CAPITAL LETTER R WITH CARON
		"Ř" => "{\\v R}",
		// <U0158> <U0052>

		// LATIN SMALL LETTER R WITH CARON
		"ř" => "{\\v r}",
		// <U0159> <U0072>

		// LATIN CAPITAL LETTER S WITH ACUTE
		"Ś" => "{\\'S}",
		// <U015A> <U0053>

		// LATIN SMALL LETTER S WITH ACUTE
		"ś" => "{\\'s}",
		// <U015B> <U0073>

		// LATIN CAPITAL LETTER S WITH CIRCUMFLEX
		"Ŝ" => "Sh", // "S"
		// <U015C> "<U0053><U0068>";<U0053>

		// LATIN SMALL LETTER S WITH CIRCUMFLEX
		"ŝ" => "sh", // "s"
		// <U015D> "<U0073><U0068>";<U0073>

		// LATIN CAPITAL LETTER S WITH CEDILLA
		"Ş" => "{\\c S}",
		// <U015E> <U0053>

		// LATIN SMALL LETTER S WITH CEDILLA
		"ş" => "{\\c s}",
		// <U015F> <U0073>

		// LATIN CAPITAL LETTER S WITH CARON
		"Š" => "{\\v S}",
		// <U0160> <U0053>

		// LATIN SMALL LETTER S WITH CARON
		"š" => "{\\v s}",
		// <U0161> <U0073>

		// LATIN CAPITAL LETTER T WITH CEDILLA
		"Ţ" => "{\\c T}",
		// <U0162> <U0054>

		// LATIN SMALL LETTER T WITH CEDILLA
		"ţ" => "{\\c t}",
		// <U0163> <U0074>

		// LATIN CAPITAL LETTER T WITH CARON
		"Ť" => "{\\v T}",
		// <U0164> <U0054>

		// LATIN SMALL LETTER T WITH CARON
		"ť" => "{\\v t}",
		// <U0165> <U0074>

		// LATIN CAPITAL LETTER T WITH STROKE
		"Ŧ" => "T",
		// <U0166> <U0054>

		// LATIN SMALL LETTER T WITH STROKE
		"ŧ" => "t",
		// <U0167> <U0074>

		// LATIN CAPITAL LETTER U WITH TILDE
		"Ũ" => "U",
		// <U0168> <U0055>

		// LATIN SMALL LETTER U WITH TILDE
		"ũ" => "u",
		// <U0169> <U0075>

		// LATIN CAPITAL LETTER U WITH MACRON
		"Ū" => "U",
		// <U016A> <U0055>

		// LATIN SMALL LETTER U WITH MACRON
		"ū" => "u",
		// <U016B> <U0075>

		// LATIN CAPITAL LETTER U WITH BREVE
		"Ŭ" => "U",
		// <U016C> <U0055>

		// LATIN SMALL LETTER U WITH BREVE
		"ŭ" => "u",
		// <U016D> <U0075>

		// LATIN CAPITAL LETTER U WITH RING ABOVE
		"Ů" => "{\\r U}",
		// <U016E> <U0055>

		// LATIN SMALL LETTER U WITH RING ABOVE
		"ů" => "{\\r u}",
		// <U016F> <U0075>

		// LATIN CAPITAL LETTER U WITH DOUBLE ACUTE
		"Ű" => "{\\H U}",
		// <U0170> <U0055>

		// LATIN SMALL LETTER U WITH DOUBLE ACUTE
		"ű" => "{\\H u}",
		// <U0171> <U0075>

		// LATIN CAPITAL LETTER U WITH OGONEK
		"Ų" => "U",
		// <U0172> <U0055>

		// LATIN SMALL LETTER U WITH OGONEK
		"ų" => "u",
		// <U0173> <U0075>

		// LATIN CAPITAL LETTER W WITH CIRCUMFLEX
		"Ŵ" => "W",
		// <U0174> <U0057>

		// LATIN SMALL LETTER W WITH CIRCUMFLEX
		"ŵ" => "w",
		// <U0175> <U0077>

		// LATIN CAPITAL LETTER Y WITH CIRCUMFLEX
		"Ŷ" => "Y",
		// <U0176> <U0059>

		// LATIN SMALL LETTER Y WITH CIRCUMFLEX
		"ŷ" => "y",
		// <U0177> <U0079>

		// LATIN CAPITAL LETTER Y WITH DIAERESIS
		"Ÿ" => "{\\\"Y}",
		// <U0178> <U0059>

		// LATIN CAPITAL LETTER Z WITH ACUTE
		"Ź" => "{\\'Z}",
		// <U0179> <U005A>

		// LATIN SMALL LETTER Z WITH ACUTE
		"ź" => "{\\'z}",
		// <U017A> <U007A>

		// LATIN CAPITAL LETTER Z WITH DOT ABOVE
		"Ż" => "{\\.Z}",
		// <U017B> <U005A>

		// LATIN SMALL LETTER Z WITH DOT ABOVE
		"ż" => "{\\.z}",
		// <U017C> <U007A>

		// LATIN CAPITAL LETTER Z WITH CARON
		"Ž" => "{\\v Z}",
		// <U017D> <U005A>

		// LATIN SMALL LETTER Z WITH CARON
		"ž" => "{\\v z}",
		// <U017E> <U007A>

		// LATIN SMALL LETTER LONG S
		"ſ" => "s",
		// <U017F> <U0073>

		// LATIN SMALL LETTER F WITH HOOK
		"ƒ" => "{\\textflorin}",
		// <U0192> <U0066>

		// LATIN CAPITAL LETTER S WITH COMMA BELOW
		"Ș" => "S", // "Ş"
		// <U0218> <U015E>;<U0053>

		// LATIN SMALL LETTER S WITH COMMA BELOW
		"ș" => "s", // "ş"
		// <U0219> <U015F>;<U0073>

		// LATIN CAPITAL LETTER T WITH COMMA BELOW
		"Ț" => "T", // "Ţ"
		// <U021A> <U0162>;<U0054>

		// LATIN SMALL LETTER T WITH COMMA BELOW
		"ț" => "t", // "ţ"
		// <U021B> <U0163>;<U0074>

		// MODIFIER LETTER PRIME
		"ʹ" => "'", // "′"
		// <U02B9> <U2032>;<U0027>

		// MODIFIER LETTER TURNED COMMA
		"ʻ" => "'", // "‘"
		// <U02BB> <U2018>

		// MODIFIER LETTER APOSTROPHE
		"ʼ" => "'", // "’"
		// <U02BC> <U2019>;<U0027>

		// MODIFIER LETTER REVERSED COMMA
		"ʽ" => "'", // "‛"
		// <U02BD> <U201B>

		// MODIFIER LETTER CIRCUMFLEX ACCENT
		"ˆ" => "{\\textasciicircum}",
		// <U02C6> <U005E>

		// MODIFIER LETTER VERTICAL LINE
		"ˈ" => "'",
		// <U02C8> <U0027>

		// MODIFIER LETTER MACRON
		"ˉ" => "-", // "¯"
		// <U02C9> <U00AF>

		// MODIFIER LETTER LOW VERTICAL LINE
		"ˌ" => ",",
		// <U02CC> <U002C>

		// MODIFIER LETTER TRIANGULAR COLON
		"ː" => ":",
		// <U02D0> <U003A>

		// RING ABOVE
		"˚" => "o", // "°"
		// <U02DA> <U00B0>

		// SMALL TILDE
		"˜" => "\\~{}",
		// <U02DC> <U007E>

		// DOUBLE ACUTE ACCENT
		"˝" => "{\\textacutedbl}",
		// <U02DD> <U0022>

		// GREEK NUMERAL SIGN
		"ʹ" => "'",
		// <U0374> <U0027>

		// GREEK LOWER NUMERAL SIGN
		"͵" => ",",
		// <U0375> <U002C>

		// GREEK QUESTION MARK
		";" => ";",
		// <U037E> <U003B>

		// LATIN CAPITAL LETTER B WITH DOT ABOVE
		"Ḃ" => "B",
		// <U1E02> <U0042>

		// LATIN SMALL LETTER B WITH DOT ABOVE
		"ḃ" => "b",
		// <U1E03> <U0062>

		// LATIN CAPITAL LETTER D WITH DOT ABOVE
		"Ḋ" => "D",
		// <U1E0A> <U0044>

		// LATIN SMALL LETTER D WITH DOT ABOVE
		"ḋ" => "d",
		// <U1E0B> <U0064>

		// LATIN CAPITAL LETTER F WITH DOT ABOVE
		"Ḟ" => "F",
		// <U1E1E> <U0046>

		// LATIN SMALL LETTER F WITH DOT ABOVE
		"ḟ" => "f",
		// <U1E1F> <U0066>

		// LATIN CAPITAL LETTER M WITH DOT ABOVE
		"Ṁ" => "M",
		// <U1E40> <U004D>

		// LATIN SMALL LETTER M WITH DOT ABOVE
		"ṁ" => "m",
		// <U1E41> <U006D>

		// LATIN CAPITAL LETTER P WITH DOT ABOVE
		"Ṗ" => "P",
		// <U1E56> <U0050>

		// LATIN SMALL LETTER P WITH DOT ABOVE
		"ṗ" => "p",
		// <U1E57> <U0070>

		// LATIN CAPITAL LETTER S WITH DOT ABOVE
		"Ṡ" => "S",
		// <U1E60> <U0053>

		// LATIN SMALL LETTER S WITH DOT ABOVE
		"ṡ" => "s",
		// <U1E61> <U0073>

		// LATIN CAPITAL LETTER T WITH DOT ABOVE
		"Ṫ" => "T",
		// <U1E6A> <U0054>

		// LATIN SMALL LETTER T WITH DOT ABOVE
		"ṫ" => "t",
		// <U1E6B> <U0074>

		// LATIN CAPITAL LETTER W WITH GRAVE
		"Ẁ" => "W",
		// <U1E80> <U0057>

		// LATIN SMALL LETTER W WITH GRAVE
		"ẁ" => "w",
		// <U1E81> <U0077>

		// LATIN CAPITAL LETTER W WITH ACUTE
		"Ẃ" => "W",
		// <U1E82> <U0057>

		// LATIN SMALL LETTER W WITH ACUTE
		"ẃ" => "w",
		// <U1E83> <U0077>

		// LATIN CAPITAL LETTER W WITH DIAERESIS
		"Ẅ" => "W",
		// <U1E84> <U0057>

		// LATIN SMALL LETTER W WITH DIAERESIS
		"ẅ" => "w",
		// <U1E85> <U0077>

		// LATIN CAPITAL LETTER Y WITH GRAVE
		"Ỳ" => "Y",
		// <U1EF2> <U0059>

		// LATIN SMALL LETTER Y WITH GRAVE
		"ỳ" => "y",
		// <U1EF3> <U0079>

		// EN QUAD
		" " => " ",
		// <U2000> <U0020>

		// EM QUAD
		" " => "  ",
		// <U2001> "<U0020><U0020>"

		// EN SPACE
		" " => " ",
		// <U2002> <U0020>

		// EM SPACE
		" " => "  ",
		// <U2003> "<U0020><U0020>"

		// THREE-PER-EM SPACE
		" " => " ",
		// <U2004> <U0020>

		// FOUR-PER-EM SPACE
		" " => " ",
		// <U2005> <U0020>

		// SIX-PER-EM SPACE
		" " => " ",
		// <U2006> <U0020>

		// FIGURE SPACE
		" " => " ",
		// <U2007> <U0020>

		// PUNCTUATION SPACE
		" " => " ",
		// <U2008> <U0020>

		// THIN SPACE
		" " => " ",
		// <U2009> <U0020>

		// HYPHEN
		"‐" => "-",
		// <U2010> <U002D>

		// NON-BREAKING HYPHEN
		"‑" => "-",
		// <U2011> <U002D>

		// FIGURE DASH
		"‒" => "-",
		// <U2012> <U002D>

		// EN DASH
		"–" => "{\\textendash}",
		// <U2013> <U002D>

		// EM DASH
		"—" => "{\\textemdash}",
		// <U2014> "<U002D><U002D>"

		// HORIZONTAL BAR
		"―" => "--",
		// <U2015> "<U002D><U002D>"

		// DOUBLE VERTICAL LINE
		"‖" => "{\\textbardbl}",
		// <U2016> "<U007C><U007C>"

		// DOUBLE LOW LINE
		"‗" => "{\\textunderscore}",
		// <U2017> <U005F>

		// LEFT SINGLE QUOTATION MARK
		"‘" => "{\\textquoteleft}",
		// <U2018> <U0027>

		// RIGHT SINGLE QUOTATION MARK
		"’" => "{\\textquoteright}",
		// <U2019> <U0027>

		// SINGLE LOW-9 QUOTATION MARK
		"‚" => "{\\quotesinglbase}",
		// <U201A> <U0027>

		// SINGLE HIGH-REVERSED-9 QUOTATION MARK
		"‛" => "'",
		// <U201B> <U0027>

		// LEFT DOUBLE QUOTATION MARK
		"“" => "{\\textquotedblleft}",
		// <U201C> <U0022>

		// RIGHT DOUBLE QUOTATION MARK
		"”" => "{\\textquotedblright}",
		// <U201D> <U0022>

		// DOUBLE LOW-9 QUOTATION MARK
		"„" => "{\\quotedblbase}",
		// <U201E> <U0022>

		// DOUBLE HIGH-REVERSED-9 QUOTATION MARK
		"‟" => "\"",
		// <U201F> <U0022>

		// DAGGER
		"†" => "{\\textdagger}",
		// <U2020> <U002B>

		// DOUBLE DAGGER
		"‡" => "{\\textdaggerdbl}",
		// <U2021> "<U002B><U002B>"

		// BULLET
		"•" => "{\\textbullet}",
		// <U2022> <U006F>

		// TRIANGULAR BULLET
		"‣" => ">",
		// <U2023> <U003E>

		// ONE DOT LEADER
		"․" => ".",
		// <U2024> <U002E>

		// TWO DOT LEADER
		"‥" => "..",
		// <U2025> "<U002E><U002E>"

		// HORIZONTAL ELLIPSIS
		"…" => "{\\textellipsis}",
		// <U2026> "<U002E><U002E><U002E>"

		// HYPHENATION POINT
		"‧" => "-",
		// <U2027> <U002D>

		// NARROW NO-BREAK SPACE
		" " => " ",
		// <U202F> <U0020>

		// PER MILLE SIGN
		"‰" => "{\\textperthousand}",
		// <U2030> "<U0020><U0030><U002F><U0030><U0030>"

		// PRIME
		"′" => "'",
		// <U2032> <U0027>

		// DOUBLE PRIME
		"″" => "\"",
		// <U2033> <U0022>

		// TRIPLE PRIME
		"‴" => "'''",
		// <U2034> "<U0027><U0027><U0027>"

		// REVERSED PRIME
		"‵" => "`",
		// <U2035> <U0060>

		// REVERSED DOUBLE PRIME
		"‶" => "``",
		// <U2036> "<U0060><U0060>"

		// REVERSED TRIPLE PRIME
		"‷" => "```",
		// <U2037> "<U0060><U0060><U0060>"

		// SINGLE LEFT-POINTING ANGLE QUOTATION MARK
		"‹" => "{\\guilsinglleft}",
		// <U2039> <U003C>

		// SINGLE RIGHT-POINTING ANGLE QUOTATION MARK
		"›" => "{\\guilsinglright}",
		// <U203A> <U003E>

		// DOUBLE EXCLAMATION MARK
		"‼" => "!!",
		// <U203C> "<U0021><U0021>"

		// OVERLINE
		"‾" => "-",
		// <U203E> <U002D>

		// HYPHEN BULLET
		"⁃" => "-",
		// <U2043> <U002D>

		// FRACTION SLASH
		"⁄" => "{\\textfractionsolidus}",
		// <U2044> <U002F>

		// QUESTION EXCLAMATION MARK
		"⁈" => "?!",
		// <U2048> "<U003F><U0021>"

		// EXCLAMATION QUESTION MARK
		"⁉" => "!?",
		// <U2049> "<U0021><U003F>"

		// TIRONIAN SIGN ET
		"⁊" => "7",
		// <U204A> <U0037>

		// SUPERSCRIPT ZERO
		"⁰" => '$^{0}$', // "0"
		// <U2070> "<U005E><U0030>";<U0030>

		// SUPERSCRIPT FOUR
		"⁴" => '$^{4}$', // "4"
		// <U2074> "<U005E><U0034>";<U0034>

		// SUPERSCRIPT FIVE
		"⁵" => '$^{5}$', // "5"
		// <U2075> "<U005E><U0035>";<U0035>

		// SUPERSCRIPT SIX
		"⁶" => '$^{6}$', // "6"
		// <U2076> "<U005E><U0036>";<U0036>

		// SUPERSCRIPT SEVEN
		"⁷" => '$^{7}$', // "7"
		// <U2077> "<U005E><U0037>";<U0037>

		// SUPERSCRIPT EIGHT
		"⁸" => '$^{8}$', // "8"
		// <U2078> "<U005E><U0038>";<U0038>

		// SUPERSCRIPT NINE
		"⁹" => '$^{9}$', // "9"
		// <U2079> "<U005E><U0039>";<U0039>

		// SUPERSCRIPT PLUS SIGN
		"⁺" => '$^{+}$', // "+"
		// <U207A> "<U005E><U002B>";<U002B>

		// SUPERSCRIPT MINUS
		"⁻" => '$^{-}$', // "-"
		// <U207B> "<U005E><U002D>";<U002D>

		// SUPERSCRIPT EQUALS SIGN
		"⁼" => '$^{=}$', // "="
		// <U207C> "<U005E><U003D>";<U003D>

		// SUPERSCRIPT LEFT PARENTHESIS
		"⁽" => '$^{(}$', // "("
		// <U207D> "<U005E><U0028>";<U0028>

		// SUPERSCRIPT RIGHT PARENTHESIS
		"⁾" => '$^{)}$', // ")"
		// <U207E> "<U005E><U0029>";<U0029>

		// SUPERSCRIPT LATIN SMALL LETTER N
		"ⁿ" => '$^{n}$', // "n"
		// <U207F> "<U005E><U006E>";<U006E>

		// SUBSCRIPT ZERO
		"₀" => '$_{0}$', // "0"
		// <U2080> "<U005F><U0030>";<U0030>

		// SUBSCRIPT ONE
		"₁" => '$_{1}$', // "1"
		// <U2081> "<U005F><U0031>";<U0031>

		// SUBSCRIPT TWO
		"₂" => '$_{2}$', // "2"
		// <U2082> "<U005F><U0032>";<U0032>

		// SUBSCRIPT THREE
		"₃" => '$_{3}$', // "3"
		// <U2083> "<U005F><U0033>";<U0033>

		// SUBSCRIPT FOUR
		"₄" => '$_{4}$', // "4"
		// <U2084> "<U005F><U0034>";<U0034>

		// SUBSCRIPT FIVE
		"₅" => '$_{5}$', // "5"
		// <U2085> "<U005F><U0035>";<U0035>

		// SUBSCRIPT SIX
		"₆" => '$_{6}$', // "6"
		// <U2086> "<U005F><U0036>";<U0036>

		// SUBSCRIPT SEVEN
		"₇" => '$_{7}$', // "7"
		// <U2087> "<U005F><U0037>";<U0037>

		// SUBSCRIPT EIGHT
		"₈" => '$_{8}$', // "8"
		// <U2088> "<U005F><U0038>";<U0038>

		// SUBSCRIPT NINE
		"₉" => '$_{9}$', // "9"
		// <U2089> "<U005F><U0039>";<U0039>

		// SUBSCRIPT PLUS SIGN
		"₊" => '$_{+}$', // "+"
		// <U208A> "<U005F><U002B>";<U002B>

		// SUBSCRIPT MINUS
		"₋" => '$_{-}$', // "-"
		// <U208B> "<U005F><U002D>";<U002D>

		// SUBSCRIPT EQUALS SIGN
		"₌" => '$_{=}$', // "="
		// <U208C> "<U005F><U003D>";<U003D>

		// SUBSCRIPT LEFT PARENTHESIS
		"₍" => '$_{(}$', // "("
		// <U208D> "<U005F><U0028>";<U0028>

		// SUBSCRIPT RIGHT PARENTHESIS
		"₎" => '$_{)}$', // ")"
		// <U208E> "<U005F><U0029>";<U0029>

		// EURO SIGN
		"€" => "{\\texteuro}", // "E"
		// <U20AC> "<U0045><U0055><U0052>";<U0045>

		// ACCOUNT OF
		"℀" => "a/c",
		// <U2100> "<U0061><U002F><U0063>"

		// ADDRESSED TO THE SUBJECT
		"℁" => "a/s",
		// <U2101> "<U0061><U002F><U0073>"

		// DEGREE CELSIUS
		"℃" => "{\\textcelsius}", // "°C"
		// <U2103> "<U00B0><U0043>";<U0043>

		// CARE OF
		"℅" => "c/o",
		// <U2105> "<U0063><U002F><U006F>"

		// CADA UNA
		"℆" => "c/u",
		// <U2106> "<U0063><U002F><U0075>"

		// DEGREE FAHRENHEIT
		"℉" => "F", // "°F"
		// <U2109> "<U00B0><U0046>";<U0046>

		// SCRIPT SMALL L
		"ℓ" => "l",
		// <U2113> <U006C>

		// NUMERO SIGN
		"№" => "{\\textnumero}", // "Nº"
		// <U2116> "<U004E><U00BA>";"<U004E><U006F>"

		// SOUND RECORDING COPYRIGHT
		"℗" => "{\\textcircledP}",
		// <U2117> "<U0028><U0050><U0029>"

		// SERVICE MARK
		"℠" => "{\\textservicemark}",
		// <U2120> "<U005B><U0053><U004D><U005D>"

		// TELEPHONE SIGN
		"℡" => "TEL",
		// <U2121> "<U0054><U0045><U004C>"

		// TRADE MARK SIGN
		"™" => "{\\texttrademark}",
		// <U2122> "<U005B><U0054><U004D><U005D>"

		// OHM SIGN
		"Ω" => "{\\textohm}", // "Ω", "O"
		// <U2126> <U03A9>;"<U006F><U0068><U006D>";<U004F>

		// KELVIN SIGN
		"K" => "K",
		// <U212A> <U004B>

		// ANGSTROM SIGN
		"Å" => "A", // "Å"
		// <U212B> <U00C5>

		// ESTIMATED SYMBOL
		"℮" => "{\\textestimated}",
		// <U212E> <U0065>

		// VULGAR FRACTION ONE THIRD
		"⅓" => " 1/3",
		// <U2153> "<U0020><U0031><U002F><U0033>"

		// VULGAR FRACTION TWO THIRDS
		"⅔" => " 2/3",
		// <U2154> "<U0020><U0032><U002F><U0033>"

		// VULGAR FRACTION ONE FIFTH
		"⅕" => " 1/5",
		// <U2155> "<U0020><U0031><U002F><U0035>"

		// VULGAR FRACTION TWO FIFTHS
		"⅖" => " 2/5",
		// <U2156> "<U0020><U0032><U002F><U0035>"

		// VULGAR FRACTION THREE FIFTHS
		"⅗" => " 3/5",
		// <U2157> "<U0020><U0033><U002F><U0035>"

		// VULGAR FRACTION FOUR FIFTHS
		"⅘" => " 4/5",
		// <U2158> "<U0020><U0034><U002F><U0035>"

		// VULGAR FRACTION ONE SIXTH
		"⅙" => " 1/6",
		// <U2159> "<U0020><U0031><U002F><U0036>"

		// VULGAR FRACTION FIVE SIXTHS
		"⅚" => " 5/6",
		// <U215A> "<U0020><U0035><U002F><U0036>"

		// VULGAR FRACTION ONE EIGHTH
		"⅛" => " 1/8",
		// <U215B> "<U0020><U0031><U002F><U0038>"

		// VULGAR FRACTION THREE EIGHTHS
		"⅜" => " 3/8",
		// <U215C> "<U0020><U0033><U002F><U0038>"

		// VULGAR FRACTION FIVE EIGHTHS
		"⅝" => " 5/8",
		// <U215D> "<U0020><U0035><U002F><U0038>"

		// VULGAR FRACTION SEVEN EIGHTHS
		"⅞" => " 7/8",
		// <U215E> "<U0020><U0037><U002F><U0038>"

		// FRACTION NUMERATOR ONE
		"⅟" => " 1/",
		// <U215F> "<U0020><U0031><U002F>"

		// ROMAN NUMERAL ONE
		"Ⅰ" => "I",
		// <U2160> <U0049>

		// ROMAN NUMERAL TWO
		"Ⅱ" => "II",
		// <U2161> "<U0049><U0049>"

		// ROMAN NUMERAL THREE
		"Ⅲ" => "III",
		// <U2162> "<U0049><U0049><U0049>"

		// ROMAN NUMERAL FOUR
		"Ⅳ" => "IV",
		// <U2163> "<U0049><U0056>"

		// ROMAN NUMERAL FIVE
		"Ⅴ" => "V",
		// <U2164> <U0056>

		// ROMAN NUMERAL SIX
		"Ⅵ" => "VI",
		// <U2165> "<U0056><U0049>"

		// ROMAN NUMERAL SEVEN
		"Ⅶ" => "VII",
		// <U2166> "<U0056><U0049><U0049>"

		// ROMAN NUMERAL EIGHT
		"Ⅷ" => "VIII",
		// <U2167> "<U0056><U0049><U0049><U0049>"

		// ROMAN NUMERAL NINE
		"Ⅸ" => "IX",
		// <U2168> "<U0049><U0058>"

		// ROMAN NUMERAL TEN
		"Ⅹ" => "X",
		// <U2169> <U0058>

		// ROMAN NUMERAL ELEVEN
		"Ⅺ" => "XI",
		// <U216A> "<U0058><U0049>"

		// ROMAN NUMERAL TWELVE
		"Ⅻ" => "XII",
		// <U216B> "<U0058><U0049><U0049>"

		// ROMAN NUMERAL FIFTY
		"Ⅼ" => "L",
		// <U216C> <U004C>

		// ROMAN NUMERAL ONE HUNDRED
		"Ⅽ" => "C",
		// <U216D> <U0043>

		// ROMAN NUMERAL FIVE HUNDRED
		"Ⅾ" => "D",
		// <U216E> <U0044>

		// ROMAN NUMERAL ONE THOUSAND
		"Ⅿ" => "M",
		// <U216F> <U004D>

		// SMALL ROMAN NUMERAL ONE
		"ⅰ" => "i",
		// <U2170> <U0069>

		// SMALL ROMAN NUMERAL TWO
		"ⅱ" => "ii",
		// <U2171> "<U0069><U0069>"

		// SMALL ROMAN NUMERAL THREE
		"ⅲ" => "iii",
		// <U2172> "<U0069><U0069><U0069>"

		// SMALL ROMAN NUMERAL FOUR
		"ⅳ" => "iv",
		// <U2173> "<U0069><U0076>"

		// SMALL ROMAN NUMERAL FIVE
		"ⅴ" => "v",
		// <U2174> <U0076>

		// SMALL ROMAN NUMERAL SIX
		"ⅵ" => "vi",
		// <U2175> "<U0076><U0069>"

		// SMALL ROMAN NUMERAL SEVEN
		"ⅶ" => "vii",
		// <U2176> "<U0076><U0069><U0069>"

		// SMALL ROMAN NUMERAL EIGHT
		"ⅷ" => "viii",
		// <U2177> "<U0076><U0069><U0069><U0069>"

		// SMALL ROMAN NUMERAL NINE
		"ⅸ" => "ix",
		// <U2178> "<U0069><U0078>"

		// SMALL ROMAN NUMERAL TEN
		"ⅹ" => "x",
		// <U2179> <U0078>

		// SMALL ROMAN NUMERAL ELEVEN
		"ⅺ" => "xi",
		// <U217A> "<U0078><U0069>"

		// SMALL ROMAN NUMERAL TWELVE
		"ⅻ" => "xii",
		// <U217B> "<U0078><U0069><U0069>"

		// SMALL ROMAN NUMERAL FIFTY
		"ⅼ" => "l",
		// <U217C> <U006C>

		// SMALL ROMAN NUMERAL ONE HUNDRED
		"ⅽ" => "c",
		// <U217D> <U0063>

		// SMALL ROMAN NUMERAL FIVE HUNDRED
		"ⅾ" => "d",
		// <U217E> <U0064>

		// SMALL ROMAN NUMERAL ONE THOUSAND
		"ⅿ" => "m",
		// <U217F> <U006D>

		// LEFTWARDS ARROW
		"←" => "{\\textleftarrow}",
		// <U2190> "<U003C><U002D>"

		// UPWARDS ARROW
		"↑" => "{\\textuparrow}",
		// <U2191> <U005E>

		// RIGHTWARDS ARROW
		"→" => "{\\textrightarrow}",
		// <U2192> "<U002D><U003E>"

		// DOWNWARDS ARROW
		"↓" => "{\\textdownarrow}",
		// <U2193> <U0076>

		// LEFT RIGHT ARROW
		"↔" => "<->",
		// <U2194> "<U003C><U002D><U003E>"

		// LEFTWARDS DOUBLE ARROW
		"⇐" => "<=",
		// <U21D0> "<U003C><U003D>"

		// RIGHTWARDS DOUBLE ARROW
		"⇒" => "=>",
		// <U21D2> "<U003D><U003E>"

		// LEFT RIGHT DOUBLE ARROW
		"⇔" => "<=>",
		// <U21D4> "<U003C><U003D><U003E>"

		// MINUS SIGN
		"−" => "-", // "–"
		// <U2212> <U2013>;<U002D>

		// DIVISION SLASH
		"∕" => "/",
		// <U2215> <U002F>

		// SET MINUS
		"∖" => "\\",
		// <U2216> <U005C>

		// ASTERISK OPERATOR
		"∗" => "*",
		// <U2217> <U002A>

		// RING OPERATOR
		"∘" => "o",
		// <U2218> <U006F>

		// BULLET OPERATOR
		"∙" => ".", // "·"
		// <U2219> <U00B7>

		// INFINITY
		"∞" => '$\\infty$',
		// <U221E> "<U0069><U006E><U0066>"

		// DIVIDES
		"∣" => "|",
		// <U2223> <U007C>

		// PARALLEL TO
		"∥" => "||",
		// <U2225> "<U007C><U007C>"

		// RATIO
		"∶" => ":",
		// <U2236> <U003A>

		// TILDE OPERATOR
		"∼" => "\\~{}",
		// <U223C> <U007E>

		// NOT EQUAL TO
		"≠" => "/=",
		// <U2260> "<U002F><U003D>"

		// IDENTICAL TO
		"≡" => "=",
		// <U2261> <U003D>

		// LESS-THAN OR EQUAL TO
		"≤" => "<=",
		// <U2264> "<U003C><U003D>"

		// GREATER-THAN OR EQUAL TO
		"≥" => ">=",
		// <U2265> "<U003E><U003D>"

		// MUCH LESS-THAN
		"≪" => "<<",
		// <U226A> "<U003C><U003C>"

		// MUCH GREATER-THAN
		"≫" => ">>",
		// <U226B> "<U003E><U003E>"

		// CIRCLED PLUS
		"⊕" => "(+)",
		// <U2295> "<U0028><U002B><U0029>"

		// CIRCLED MINUS
		"⊖" => "(-)",
		// <U2296> "<U0028><U002D><U0029>"

		// CIRCLED TIMES
		"⊗" => "(x)",
		// <U2297> "<U0028><U0078><U0029>"

		// CIRCLED DIVISION SLASH
		"⊘" => "(/)",
		// <U2298> "<U0028><U002F><U0029>"

		// RIGHT TACK
		"⊢" => "|-",
		// <U22A2> "<U007C><U002D>"

		// LEFT TACK
		"⊣" => "-|",
		// <U22A3> "<U002D><U007C>"

		// ASSERTION
		"⊦" => "|-",
		// <U22A6> "<U007C><U002D>"

		// MODELS
		"⊧" => "|=",
		// <U22A7> "<U007C><U003D>"

		// TRUE
		"⊨" => "|=",
		// <U22A8> "<U007C><U003D>"

		// FORCES
		"⊩" => "||-",
		// <U22A9> "<U007C><U007C><U002D>"

		// DOT OPERATOR
		"⋅" => ".", // "·"
		// <U22C5> <U00B7>

		// STAR OPERATOR
		"⋆" => "*",
		// <U22C6> <U002A>

		// EQUAL AND PARALLEL TO
		"⋕" => '$\\#$',
		// <U22D5> <U0023>

		// VERY MUCH LESS-THAN
		"⋘" => "<<<",
		// <U22D8> "<U003C><U003C><U003C>"

		// VERY MUCH GREATER-THAN
		"⋙" => ">>>",
		// <U22D9> "<U003E><U003E><U003E>"

		// MIDLINE HORIZONTAL ELLIPSIS
		"⋯" => "...",
		// <U22EF> "<U002E><U002E><U002E>"

		// LEFT-POINTING ANGLE BRACKET
		"〈" => "{\\textlangle}",
		// <U2329> <U003C>

		// RIGHT-POINTING ANGLE BRACKET
		"〉" => "{\\textrangle}",
		// <U232A> <U003E>

		// SYMBOL FOR NULL
		"␀" => "NUL",
		// <U2400> "<U004E><U0055><U004C>"

		// SYMBOL FOR START OF HEADING
		"␁" => "SOH",
		// <U2401> "<U0053><U004F><U0048>"

		// SYMBOL FOR START OF TEXT
		"␂" => "STX",
		// <U2402> "<U0053><U0054><U0058>"

		// SYMBOL FOR END OF TEXT
		"␃" => "ETX",
		// <U2403> "<U0045><U0054><U0058>"

		// SYMBOL FOR END OF TRANSMISSION
		"␄" => "EOT",
		// <U2404> "<U0045><U004F><U0054>"

		// SYMBOL FOR ENQUIRY
		"␅" => "ENQ",
		// <U2405> "<U0045><U004E><U0051>"

		// SYMBOL FOR ACKNOWLEDGE
		"␆" => "ACK",
		// <U2406> "<U0041><U0043><U004B>"

		// SYMBOL FOR BELL
		"␇" => "BEL",
		// <U2407> "<U0042><U0045><U004C>"

		// SYMBOL FOR BACKSPACE
		"␈" => "BS",
		// <U2408> "<U0042><U0053>"

		// SYMBOL FOR HORIZONTAL TABULATION
		"␉" => "HT",
		// <U2409> "<U0048><U0054>"

		// SYMBOL FOR LINE FEED
		"␊" => "LF",
		// <U240A> "<U004C><U0046>"

		// SYMBOL FOR VERTICAL TABULATION
		"␋" => "VT",
		// <U240B> "<U0056><U0054>"

		// SYMBOL FOR FORM FEED
		"␌" => "FF",
		// <U240C> "<U0046><U0046>"

		// SYMBOL FOR CARRIAGE RETURN
		"␍" => "CR",
		// <U240D> "<U0043><U0052>"

		// SYMBOL FOR SHIFT OUT
		"␎" => "SO",
		// <U240E> "<U0053><U004F>"

		// SYMBOL FOR SHIFT IN
		"␏" => "SI",
		// <U240F> "<U0053><U0049>"

		// SYMBOL FOR DATA LINK ESCAPE
		"␐" => "DLE",
		// <U2410> "<U0044><U004C><U0045>"

		// SYMBOL FOR DEVICE CONTROL ONE
		"␑" => "DC1",
		// <U2411> "<U0044><U0043><U0031>"

		// SYMBOL FOR DEVICE CONTROL TWO
		"␒" => "DC2",
		// <U2412> "<U0044><U0043><U0032>"

		// SYMBOL FOR DEVICE CONTROL THREE
		"␓" => "DC3",
		// <U2413> "<U0044><U0043><U0033>"

		// SYMBOL FOR DEVICE CONTROL FOUR
		"␔" => "DC4",
		// <U2414> "<U0044><U0043><U0034>"

		// SYMBOL FOR NEGATIVE ACKNOWLEDGE
		"␕" => "NAK",
		// <U2415> "<U004E><U0041><U004B>"

		// SYMBOL FOR SYNCHRONOUS IDLE
		"␖" => "SYN",
		// <U2416> "<U0053><U0059><U004E>"

		// SYMBOL FOR END OF TRANSMISSION BLOCK
		"␗" => "ETB",
		// <U2417> "<U0045><U0054><U0042>"

		// SYMBOL FOR CANCEL
		"␘" => "CAN",
		// <U2418> "<U0043><U0041><U004E>"

		// SYMBOL FOR END OF MEDIUM
		"␙" => "EM",
		// <U2419> "<U0045><U004D>"

		// SYMBOL FOR SUBSTITUTE
		"␚" => "SUB",
		// <U241A> "<U0053><U0055><U0042>"

		// SYMBOL FOR ESCAPE
		"␛" => "ESC",
		// <U241B> "<U0045><U0053><U0043>"

		// SYMBOL FOR FILE SEPARATOR
		"␜" => "FS",
		// <U241C> "<U0046><U0053>"

		// SYMBOL FOR GROUP SEPARATOR
		"␝" => "GS",
		// <U241D> "<U0047><U0053>"

		// SYMBOL FOR RECORD SEPARATOR
		"␞" => "RS",
		// <U241E> "<U0052><U0053>"

		// SYMBOL FOR UNIT SEPARATOR
		"␟" => "US",
		// <U241F> "<U0055><U0053>"

		// SYMBOL FOR SPACE
		"␠" => "SP",
		// <U2420> "<U0053><U0050>"

		// SYMBOL FOR DELETE
		"␡" => "DEL",
		// <U2421> "<U0044><U0045><U004C>"

		// OPEN BOX
		"␣" => "{\\textvisiblespace}",
		// <U2423> <U005F>

		// SYMBOL FOR NEWLINE
		"␤" => "NL",
		// <U2424> "<U004E><U004C>"

		// SYMBOL FOR DELETE FORM TWO
		"␥" => "///",
		// <U2425> "<U002F><U002F><U002F>"

		// SYMBOL FOR SUBSTITUTE FORM TWO
		"␦" => "?",
		// <U2426> <U003F>

		// CIRCLED DIGIT ONE
		"①" => "(1)", // "1"
		// <U2460> "<U0028><U0031><U0029>";<U0031>

		// CIRCLED DIGIT TWO
		"②" => "(2)", // "2"
		// <U2461> "<U0028><U0032><U0029>";<U0032>

		// CIRCLED DIGIT THREE
		"③" => "(3)", // "3"
		// <U2462> "<U0028><U0033><U0029>";<U0033>

		// CIRCLED DIGIT FOUR
		"④" => "(4)", // "4"
		// <U2463> "<U0028><U0034><U0029>";<U0034>

		// CIRCLED DIGIT FIVE
		"⑤" => "(5)", // "5"
		// <U2464> "<U0028><U0035><U0029>";<U0035>

		// CIRCLED DIGIT SIX
		"⑥" => "(6)", // "6"
		// <U2465> "<U0028><U0036><U0029>";<U0036>

		// CIRCLED DIGIT SEVEN
		"⑦" => "(7)", // "7"
		// <U2466> "<U0028><U0037><U0029>";<U0037>

		// CIRCLED DIGIT EIGHT
		"⑧" => "(8)", // "8"
		// <U2467> "<U0028><U0038><U0029>";<U0038>

		// CIRCLED DIGIT NINE
		"⑨" => "(9)", // "9"
		// <U2468> "<U0028><U0039><U0029>";<U0039>

		// CIRCLED NUMBER TEN
		"⑩" => "(10)",
		// <U2469> "<U0028><U0031><U0030><U0029>"

		// CIRCLED NUMBER ELEVEN
		"⑪" => "(11)",
		// <U246A> "<U0028><U0031><U0031><U0029>"

		// CIRCLED NUMBER TWELVE
		"⑫" => "(12)",
		// <U246B> "<U0028><U0031><U0032><U0029>"

		// CIRCLED NUMBER THIRTEEN
		"⑬" => "(13)",
		// <U246C> "<U0028><U0031><U0033><U0029>"

		// CIRCLED NUMBER FOURTEEN
		"⑭" => "(14)",
		// <U246D> "<U0028><U0031><U0034><U0029>"

		// CIRCLED NUMBER FIFTEEN
		"⑮" => "(15)",
		// <U246E> "<U0028><U0031><U0035><U0029>"

		// CIRCLED NUMBER SIXTEEN
		"⑯" => "(16)",
		// <U246F> "<U0028><U0031><U0036><U0029>"

		// CIRCLED NUMBER SEVENTEEN
		"⑰" => "(17)",
		// <U2470> "<U0028><U0031><U0037><U0029>"

		// CIRCLED NUMBER EIGHTEEN
		"⑱" => "(18)",
		// <U2471> "<U0028><U0031><U0038><U0029>"

		// CIRCLED NUMBER NINETEEN
		"⑲" => "(19)",
		// <U2472> "<U0028><U0031><U0039><U0029>"

		// CIRCLED NUMBER TWENTY
		"⑳" => "(20)",
		// <U2473> "<U0028><U0032><U0030><U0029>"

		// PARENTHESIZED DIGIT ONE
		"⑴" => "(1)", // "1"
		// <U2474> "<U0028><U0031><U0029>";<U0031>

		// PARENTHESIZED DIGIT TWO
		"⑵" => "(2)", // "2"
		// <U2475> "<U0028><U0032><U0029>";<U0032>

		// PARENTHESIZED DIGIT THREE
		"⑶" => "(3)", // "3"
		// <U2476> "<U0028><U0033><U0029>";<U0033>

		// PARENTHESIZED DIGIT FOUR
		"⑷" => "(4)", // "4"
		// <U2477> "<U0028><U0034><U0029>";<U0034>

		// PARENTHESIZED DIGIT FIVE
		"⑸" => "(5)", // "5"
		// <U2478> "<U0028><U0035><U0029>";<U0035>

		// PARENTHESIZED DIGIT SIX
		"⑹" => "(6)", // "6"
		// <U2479> "<U0028><U0036><U0029>";<U0036>

		// PARENTHESIZED DIGIT SEVEN
		"⑺" => "(7)", // "7"
		// <U247A> "<U0028><U0037><U0029>";<U0037>

		// PARENTHESIZED DIGIT EIGHT
		"⑻" => "(8)", // "8"
		// <U247B> "<U0028><U0038><U0029>";<U0038>

		// PARENTHESIZED DIGIT NINE
		"⑼" => "(9)", // "9"
		// <U247C> "<U0028><U0039><U0029>";<U0039>

		// PARENTHESIZED NUMBER TEN
		"⑽" => "(10)",
		// <U247D> "<U0028><U0031><U0030><U0029>"

		// PARENTHESIZED NUMBER ELEVEN
		"⑾" => "(11)",
		// <U247E> "<U0028><U0031><U0031><U0029>"

		// PARENTHESIZED NUMBER TWELVE
		"⑿" => "(12)",
		// <U247F> "<U0028><U0031><U0032><U0029>"

		// PARENTHESIZED NUMBER THIRTEEN
		"⒀" => "(13)",
		// <U2480> "<U0028><U0031><U0033><U0029>"

		// PARENTHESIZED NUMBER FOURTEEN
		"⒁" => "(14)",
		// <U2481> "<U0028><U0031><U0034><U0029>"

		// PARENTHESIZED NUMBER FIFTEEN
		"⒂" => "(15)",
		// <U2482> "<U0028><U0031><U0035><U0029>"

		// PARENTHESIZED NUMBER SIXTEEN
		"⒃" => "(16)",
		// <U2483> "<U0028><U0031><U0036><U0029>"

		// PARENTHESIZED NUMBER SEVENTEEN
		"⒄" => "(17)",
		// <U2484> "<U0028><U0031><U0037><U0029>"

		// PARENTHESIZED NUMBER EIGHTEEN
		"⒅" => "(18)",
		// <U2485> "<U0028><U0031><U0038><U0029>"

		// PARENTHESIZED NUMBER NINETEEN
		"⒆" => "(19)",
		// <U2486> "<U0028><U0031><U0039><U0029>"

		// PARENTHESIZED NUMBER TWENTY
		"⒇" => "(20)",
		// <U2487> "<U0028><U0032><U0030><U0029>"

		// DIGIT ONE FULL STOP
		"⒈" => "1.", // "1"
		// <U2488> "<U0031><U002E>";<U0031>

		// DIGIT TWO FULL STOP
		"⒉" => "2.", // "2"
		// <U2489> "<U0032><U002E>";<U0032>

		// DIGIT THREE FULL STOP
		"⒊" => "3.", // "3"
		// <U248A> "<U0033><U002E>";<U0033>

		// DIGIT FOUR FULL STOP
		"⒋" => "4.", // "4"
		// <U248B> "<U0034><U002E>";<U0034>

		// DIGIT FIVE FULL STOP
		"⒌" => "5.", // "5"
		// <U248C> "<U0035><U002E>";<U0035>

		// DIGIT SIX FULL STOP
		"⒍" => "6.", // "6"
		// <U248D> "<U0036><U002E>";<U0036>

		// DIGIT SEVEN FULL STOP
		"⒎" => "7.", // "7"
		// <U248E> "<U0037><U002E>";<U0037>

		// DIGIT EIGHT FULL STOP
		"⒏" => "8.", // "8"
		// <U248F> "<U0038><U002E>";<U0038>

		// DIGIT NINE FULL STOP
		"⒐" => "9.", // "9"
		// <U2490> "<U0039><U002E>";<U0039>

		// NUMBER TEN FULL STOP
		"⒑" => "10.",
		// <U2491> "<U0031><U0030><U002E>"

		// NUMBER ELEVEN FULL STOP
		"⒒" => "11.",
		// <U2492> "<U0031><U0031><U002E>"

		// NUMBER TWELVE FULL STOP
		"⒓" => "12.",
		// <U2493> "<U0031><U0032><U002E>"

		// NUMBER THIRTEEN FULL STOP
		"⒔" => "13.",
		// <U2494> "<U0031><U0033><U002E>"

		// NUMBER FOURTEEN FULL STOP
		"⒕" => "14.",
		// <U2495> "<U0031><U0034><U002E>"

		// NUMBER FIFTEEN FULL STOP
		"⒖" => "15.",
		// <U2496> "<U0031><U0035><U002E>"

		// NUMBER SIXTEEN FULL STOP
		"⒗" => "16.",
		// <U2497> "<U0031><U0036><U002E>"

		// NUMBER SEVENTEEN FULL STOP
		"⒘" => "17.",
		// <U2498> "<U0031><U0037><U002E>"

		// NUMBER EIGHTEEN FULL STOP
		"⒙" => "18.",
		// <U2499> "<U0031><U0038><U002E>"

		// NUMBER NINETEEN FULL STOP
		"⒚" => "19.",
		// <U249A> "<U0031><U0039><U002E>"

		// NUMBER TWENTY FULL STOP
		"⒛" => "20.",
		// <U249B> "<U0032><U0030><U002E>"

		// PARENTHESIZED LATIN SMALL LETTER A
		"⒜" => "(a)", // "a"
		// <U249C> "<U0028><U0061><U0029>";<U0061>

		// PARENTHESIZED LATIN SMALL LETTER B
		"⒝" => "(b)", // "b"
		// <U249D> "<U0028><U0062><U0029>";<U0062>

		// PARENTHESIZED LATIN SMALL LETTER C
		"⒞" => "(c)", // "c"
		// <U249E> "<U0028><U0063><U0029>";<U0063>

		// PARENTHESIZED LATIN SMALL LETTER D
		"⒟" => "(d)", // "d"
		// <U249F> "<U0028><U0064><U0029>";<U0064>

		// PARENTHESIZED LATIN SMALL LETTER E
		"⒠" => "(e)", // "e"
		// <U24A0> "<U0028><U0065><U0029>";<U0065>

		// PARENTHESIZED LATIN SMALL LETTER F
		"⒡" => "(f)", // "f"
		// <U24A1> "<U0028><U0066><U0029>";<U0066>

		// PARENTHESIZED LATIN SMALL LETTER G
		"⒢" => "(g)", // "g"
		// <U24A2> "<U0028><U0067><U0029>";<U0067>

		// PARENTHESIZED LATIN SMALL LETTER H
		"⒣" => "(h)", // "h"
		// <U24A3> "<U0028><U0068><U0029>";<U0068>

		// PARENTHESIZED LATIN SMALL LETTER I
		"⒤" => "(i)", // "i"
		// <U24A4> "<U0028><U0069><U0029>";<U0069>

		// PARENTHESIZED LATIN SMALL LETTER J
		"⒥" => "(j)", // "j"
		// <U24A5> "<U0028><U006A><U0029>";<U006A>

		// PARENTHESIZED LATIN SMALL LETTER K
		"⒦" => "(k)", // "k"
		// <U24A6> "<U0028><U006B><U0029>";<U006B>

		// PARENTHESIZED LATIN SMALL LETTER L
		"⒧" => "(l)", // "l"
		// <U24A7> "<U0028><U006C><U0029>";<U006C>

		// PARENTHESIZED LATIN SMALL LETTER M
		"⒨" => "(m)", // "m"
		// <U24A8> "<U0028><U006D><U0029>";<U006D>

		// PARENTHESIZED LATIN SMALL LETTER N
		"⒩" => "(n)", // "n"
		// <U24A9> "<U0028><U006E><U0029>";<U006E>

		// PARENTHESIZED LATIN SMALL LETTER O
		"⒪" => "(o)", // "o"
		// <U24AA> "<U0028><U006F><U0029>";<U006F>

		// PARENTHESIZED LATIN SMALL LETTER P
		"⒫" => "(p)", // "p"
		// <U24AB> "<U0028><U0070><U0029>";<U0070>

		// PARENTHESIZED LATIN SMALL LETTER Q
		"⒬" => "(q)", // "q"
		// <U24AC> "<U0028><U0071><U0029>";<U0071>

		// PARENTHESIZED LATIN SMALL LETTER R
		"⒭" => "(r)", // "r"
		// <U24AD> "<U0028><U0072><U0029>";<U0072>

		// PARENTHESIZED LATIN SMALL LETTER S
		"⒮" => "(s)", // "s"
		// <U24AE> "<U0028><U0073><U0029>";<U0073>

		// PARENTHESIZED LATIN SMALL LETTER T
		"⒯" => "(t)", // "t"
		// <U24AF> "<U0028><U0074><U0029>";<U0074>

		// PARENTHESIZED LATIN SMALL LETTER U
		"⒰" => "(u)", // "u"
		// <U24B0> "<U0028><U0075><U0029>";<U0075>

		// PARENTHESIZED LATIN SMALL LETTER V
		"⒱" => "(v)", // "v"
		// <U24B1> "<U0028><U0076><U0029>";<U0076>

		// PARENTHESIZED LATIN SMALL LETTER W
		"⒲" => "(w)", // "w"
		// <U24B2> "<U0028><U0077><U0029>";<U0077>

		// PARENTHESIZED LATIN SMALL LETTER X
		"⒳" => "(x)", // "x"
		// <U24B3> "<U0028><U0078><U0029>";<U0078>

		// PARENTHESIZED LATIN SMALL LETTER Y
		"⒴" => "(y)", // "y"
		// <U24B4> "<U0028><U0079><U0029>";<U0079>

		// PARENTHESIZED LATIN SMALL LETTER Z
		"⒵" => "(z)", // "z"
		// <U24B5> "<U0028><U007A><U0029>";<U007A>

		// CIRCLED LATIN CAPITAL LETTER A
		"Ⓐ" => "(A)", // "A"
		// <U24B6> "<U0028><U0041><U0029>";<U0041>

		// CIRCLED LATIN CAPITAL LETTER B
		"Ⓑ" => "(B)", // "B"
		// <U24B7> "<U0028><U0042><U0029>";<U0042>

		// CIRCLED LATIN CAPITAL LETTER C
		"Ⓒ" => "(C)", // "C"
		// <U24B8> "<U0028><U0043><U0029>";<U0043>

		// CIRCLED LATIN CAPITAL LETTER D
		"Ⓓ" => "(D)", // "D"
		// <U24B9> "<U0028><U0044><U0029>";<U0044>

		// CIRCLED LATIN CAPITAL LETTER E
		"Ⓔ" => "(E)", // "E"
		// <U24BA> "<U0028><U0045><U0029>";<U0045>

		// CIRCLED LATIN CAPITAL LETTER F
		"Ⓕ" => "(F)", // "F"
		// <U24BB> "<U0028><U0046><U0029>";<U0046>

		// CIRCLED LATIN CAPITAL LETTER G
		"Ⓖ" => "(G)", // "G"
		// <U24BC> "<U0028><U0047><U0029>";<U0047>

		// CIRCLED LATIN CAPITAL LETTER H
		"Ⓗ" => "(H)", // "H"
		// <U24BD> "<U0028><U0048><U0029>";<U0048>

		// CIRCLED LATIN CAPITAL LETTER I
		"Ⓘ" => "(I)", // "I"
		// <U24BE> "<U0028><U0049><U0029>";<U0049>

		// CIRCLED LATIN CAPITAL LETTER J
		"Ⓙ" => "(J)", // "J"
		// <U24BF> "<U0028><U004A><U0029>";<U004A>

		// CIRCLED LATIN CAPITAL LETTER K
		"Ⓚ" => "(K)", // "K"
		// <U24C0> "<U0028><U004B><U0029>";<U004B>

		// CIRCLED LATIN CAPITAL LETTER L
		"Ⓛ" => "(L)", // "L"
		// <U24C1> "<U0028><U004C><U0029>";<U004C>

		// CIRCLED LATIN CAPITAL LETTER M
		"Ⓜ" => "(M)", // "M"
		// <U24C2> "<U0028><U004D><U0029>";<U004D>

		// CIRCLED LATIN CAPITAL LETTER N
		"Ⓝ" => "(N)", // "N"
		// <U24C3> "<U0028><U004E><U0029>";<U004E>

		// CIRCLED LATIN CAPITAL LETTER O
		"Ⓞ" => "(O)", // "O"
		// <U24C4> "<U0028><U004F><U0029>";<U004F>

		// CIRCLED LATIN CAPITAL LETTER P
		"Ⓟ" => "(P)", // "P"
		// <U24C5> "<U0028><U0050><U0029>";<U0050>

		// CIRCLED LATIN CAPITAL LETTER Q
		"Ⓠ" => "(Q)", // "Q"
		// <U24C6> "<U0028><U0051><U0029>";<U0051>

		// CIRCLED LATIN CAPITAL LETTER R
		"Ⓡ" => "(R)", // "R"
		// <U24C7> "<U0028><U0052><U0029>";<U0052>

		// CIRCLED LATIN CAPITAL LETTER S
		"Ⓢ" => "(S)", // "S"
		// <U24C8> "<U0028><U0053><U0029>";<U0053>

		// CIRCLED LATIN CAPITAL LETTER T
		"Ⓣ" => "(T)", // "T"
		// <U24C9> "<U0028><U0054><U0029>";<U0054>

		// CIRCLED LATIN CAPITAL LETTER U
		"Ⓤ" => "(U)", // "U"
		// <U24CA> "<U0028><U0055><U0029>";<U0055>

		// CIRCLED LATIN CAPITAL LETTER V
		"Ⓥ" => "(V)", // "V"
		// <U24CB> "<U0028><U0056><U0029>";<U0056>

		// CIRCLED LATIN CAPITAL LETTER W
		"Ⓦ" => "(W)", // "W"
		// <U24CC> "<U0028><U0057><U0029>";<U0057>

		// CIRCLED LATIN CAPITAL LETTER X
		"Ⓧ" => "(X)", // "X"
		// <U24CD> "<U0028><U0058><U0029>";<U0058>

		// CIRCLED LATIN CAPITAL LETTER Y
		"Ⓨ" => "(Y)", // "Y"
		// <U24CE> "<U0028><U0059><U0029>";<U0059>

		// CIRCLED LATIN CAPITAL LETTER Z
		"Ⓩ" => "(Z)", // "Z"
		// <U24CF> "<U0028><U005A><U0029>";<U005A>

		// CIRCLED LATIN SMALL LETTER A
		"ⓐ" => "(a)", // "a"
		// <U24D0> "<U0028><U0061><U0029>";<U0061>

		// CIRCLED LATIN SMALL LETTER B
		"ⓑ" => "(b)", // "b"
		// <U24D1> "<U0028><U0062><U0029>";<U0062>

		// CIRCLED LATIN SMALL LETTER C
		"ⓒ" => "(c)", // "c"
		// <U24D2> "<U0028><U0063><U0029>";<U0063>

		// CIRCLED LATIN SMALL LETTER D
		"ⓓ" => "(d)", // "d"
		// <U24D3> "<U0028><U0064><U0029>";<U0064>

		// CIRCLED LATIN SMALL LETTER E
		"ⓔ" => "(e)", // "e"
		// <U24D4> "<U0028><U0065><U0029>";<U0065>

		// CIRCLED LATIN SMALL LETTER F
		"ⓕ" => "(f)", // "f"
		// <U24D5> "<U0028><U0066><U0029>";<U0066>

		// CIRCLED LATIN SMALL LETTER G
		"ⓖ" => "(g)", // "g"
		// <U24D6> "<U0028><U0067><U0029>";<U0067>

		// CIRCLED LATIN SMALL LETTER H
		"ⓗ" => "(h)", // "h"
		// <U24D7> "<U0028><U0068><U0029>";<U0068>

		// CIRCLED LATIN SMALL LETTER I
		"ⓘ" => "(i)", // "i"
		// <U24D8> "<U0028><U0069><U0029>";<U0069>

		// CIRCLED LATIN SMALL LETTER J
		"ⓙ" => "(j)", // "j"
		// <U24D9> "<U0028><U006A><U0029>";<U006A>

		// CIRCLED LATIN SMALL LETTER K
		"ⓚ" => "(k)", // "k"
		// <U24DA> "<U0028><U006B><U0029>";<U006B>

		// CIRCLED LATIN SMALL LETTER L
		"ⓛ" => "(l)", // "l"
		// <U24DB> "<U0028><U006C><U0029>";<U006C>

		// CIRCLED LATIN SMALL LETTER M
		"ⓜ" => "(m)", // "m"
		// <U24DC> "<U0028><U006D><U0029>";<U006D>

		// CIRCLED LATIN SMALL LETTER N
		"ⓝ" => "(n)", // "n"
		// <U24DD> "<U0028><U006E><U0029>";<U006E>

		// CIRCLED LATIN SMALL LETTER O
		"ⓞ" => "(o)", // "o"
		// <U24DE> "<U0028><U006F><U0029>";<U006F>

		// CIRCLED LATIN SMALL LETTER P
		"ⓟ" => "(p)", // "p"
		// <U24DF> "<U0028><U0070><U0029>";<U0070>

		// CIRCLED LATIN SMALL LETTER Q
		"ⓠ" => "(q)", // "q"
		// <U24E0> "<U0028><U0071><U0029>";<U0071>

		// CIRCLED LATIN SMALL LETTER R
		"ⓡ" => "(r)", // "r"
		// <U24E1> "<U0028><U0072><U0029>";<U0072>

		// CIRCLED LATIN SMALL LETTER S
		"ⓢ" => "(s)", // "s"
		// <U24E2> "<U0028><U0073><U0029>";<U0073>

		// CIRCLED LATIN SMALL LETTER T
		"ⓣ" => "(t)", // "t"
		// <U24E3> "<U0028><U0074><U0029>";<U0074>

		// CIRCLED LATIN SMALL LETTER U
		"ⓤ" => "(u)", // "u"
		// <U24E4> "<U0028><U0075><U0029>";<U0075>

		// CIRCLED LATIN SMALL LETTER V
		"ⓥ" => "(v)", // "v"
		// <U24E5> "<U0028><U0076><U0029>";<U0076>

		// CIRCLED LATIN SMALL LETTER W
		"ⓦ" => "(w)", // "w"
		// <U24E6> "<U0028><U0077><U0029>";<U0077>

		// CIRCLED LATIN SMALL LETTER X
		"ⓧ" => "(x)", // "x"
		// <U24E7> "<U0028><U0078><U0029>";<U0078>

		// CIRCLED LATIN SMALL LETTER Y
		"ⓨ" => "(y)", // "y"
		// <U24E8> "<U0028><U0079><U0029>";<U0079>

		// CIRCLED LATIN SMALL LETTER Z
		"ⓩ" => "(z)", // "z"
		// <U24E9> "<U0028><U007A><U0029>";<U007A>

		// CIRCLED DIGIT ZERO
		"⓪" => "(0)", // "0"
		// <U24EA> "<U0028><U0030><U0029>";<U0030>

		// BOX DRAWINGS LIGHT HORIZONTAL
		"─" => "-",
		// <U2500> <U002D>

		// BOX DRAWINGS HEAVY HORIZONTAL
		"━" => "=",
		// <U2501> <U003D>

		// BOX DRAWINGS LIGHT VERTICAL
		"│" => "|",
		// <U2502> <U007C>

		// BOX DRAWINGS HEAVY VERTICAL
		"┃" => "|",
		// <U2503> <U007C>

		// BOX DRAWINGS LIGHT TRIPLE DASH HORIZONTAL
		"┄" => "-",
		// <U2504> <U002D>

		// BOX DRAWINGS HEAVY TRIPLE DASH HORIZONTAL
		"┅" => "=",
		// <U2505> <U003D>

		// BOX DRAWINGS LIGHT TRIPLE DASH VERTICAL
		"┆" => "|",
		// <U2506> <U007C>

		// BOX DRAWINGS HEAVY TRIPLE DASH VERTICAL
		"┇" => "|",
		// <U2507> <U007C>

		// BOX DRAWINGS LIGHT QUADRUPLE DASH HORIZONTAL
		"┈" => "-",
		// <U2508> <U002D>

		// BOX DRAWINGS HEAVY QUADRUPLE DASH HORIZONTAL
		"┉" => "=",
		// <U2509> <U003D>

		// BOX DRAWINGS LIGHT QUADRUPLE DASH VERTICAL
		"┊" => "|",
		// <U250A> <U007C>

		// BOX DRAWINGS HEAVY QUADRUPLE DASH VERTICAL
		"┋" => "|",
		// <U250B> <U007C>

		// BOX DRAWINGS LIGHT DOWN AND RIGHT
		"┌" => "+",
		// <U250C> <U002B>

		// BOX DRAWINGS DOWN LIGHT AND RIGHT HEAVY
		"┍" => "+",
		// <U250D> <U002B>

		// BOX DRAWINGS DOWN HEAVY AND RIGHT LIGHT
		"┎" => "+",
		// <U250E> <U002B>

		// BOX DRAWINGS HEAVY DOWN AND RIGHT
		"┏" => "+",
		// <U250F> <U002B>

		// BOX DRAWINGS LIGHT DOWN AND LEFT
		"┐" => "+",
		// <U2510> <U002B>

		// BOX DRAWINGS DOWN LIGHT AND LEFT HEAVY
		"┑" => "+",
		// <U2511> <U002B>

		// BOX DRAWINGS DOWN HEAVY AND LEFT LIGHT
		"┒" => "+",
		// <U2512> <U002B>

		// BOX DRAWINGS HEAVY DOWN AND LEFT
		"┓" => "+",
		// <U2513> <U002B>

		// BOX DRAWINGS LIGHT UP AND RIGHT
		"└" => "+",
		// <U2514> <U002B>

		// BOX DRAWINGS UP LIGHT AND RIGHT HEAVY
		"┕" => "+",
		// <U2515> <U002B>

		// BOX DRAWINGS UP HEAVY AND RIGHT LIGHT
		"┖" => "+",
		// <U2516> <U002B>

		// BOX DRAWINGS HEAVY UP AND RIGHT
		"┗" => "+",
		// <U2517> <U002B>

		// BOX DRAWINGS LIGHT UP AND LEFT
		"┘" => "+",
		// <U2518> <U002B>

		// BOX DRAWINGS UP LIGHT AND LEFT HEAVY
		"┙" => "+",
		// <U2519> <U002B>

		// BOX DRAWINGS UP HEAVY AND LEFT LIGHT
		"┚" => "+",
		// <U251A> <U002B>

		// BOX DRAWINGS HEAVY UP AND LEFT
		"┛" => "+",
		// <U251B> <U002B>

		// BOX DRAWINGS LIGHT VERTICAL AND RIGHT
		"├" => "+",
		// <U251C> <U002B>

		// BOX DRAWINGS VERTICAL LIGHT AND RIGHT HEAVY
		"┝" => "+",
		// <U251D> <U002B>

		// BOX DRAWINGS UP HEAVY AND RIGHT DOWN LIGHT
		"┞" => "+",
		// <U251E> <U002B>

		// BOX DRAWINGS DOWN HEAVY AND RIGHT UP LIGHT
		"┟" => "+",
		// <U251F> <U002B>

		// BOX DRAWINGS VERTICAL HEAVY AND RIGHT LIGHT
		"┠" => "+",
		// <U2520> <U002B>

		// BOX DRAWINGS DOWN LIGHT AND RIGHT UP HEAVY
		"┡" => "+",
		// <U2521> <U002B>

		// BOX DRAWINGS UP LIGHT AND RIGHT DOWN HEAVY
		"┢" => "+",
		// <U2522> <U002B>

		// BOX DRAWINGS HEAVY VERTICAL AND RIGHT
		"┣" => "+",
		// <U2523> <U002B>

		// BOX DRAWINGS LIGHT VERTICAL AND LEFT
		"┤" => "+",
		// <U2524> <U002B>

		// BOX DRAWINGS VERTICAL LIGHT AND LEFT HEAVY
		"┥" => "+",
		// <U2525> <U002B>

		// BOX DRAWINGS UP HEAVY AND LEFT DOWN LIGHT
		"┦" => "+",
		// <U2526> <U002B>

		// BOX DRAWINGS DOWN HEAVY AND LEFT UP LIGHT
		"┧" => "+",
		// <U2527> <U002B>

		// BOX DRAWINGS VERTICAL HEAVY AND LEFT LIGHT
		"┨" => "+",
		// <U2528> <U002B>

		// BOX DRAWINGS DOWN LIGHT AND LEFT UP HEAVY
		"┩" => "+",
		// <U2529> <U002B>

		// BOX DRAWINGS UP LIGHT AND LEFT DOWN HEAVY
		"┪" => "+",
		// <U252A> <U002B>

		// BOX DRAWINGS HEAVY VERTICAL AND LEFT
		"┫" => "+",
		// <U252B> <U002B>

		// BOX DRAWINGS LIGHT DOWN AND HORIZONTAL
		"┬" => "+",
		// <U252C> <U002B>

		// BOX DRAWINGS LEFT HEAVY AND RIGHT DOWN LIGHT
		"┭" => "+",
		// <U252D> <U002B>

		// BOX DRAWINGS RIGHT HEAVY AND LEFT DOWN LIGHT
		"┮" => "+",
		// <U252E> <U002B>

		// BOX DRAWINGS DOWN LIGHT AND HORIZONTAL HEAVY
		"┯" => "+",
		// <U252F> <U002B>

		// BOX DRAWINGS DOWN HEAVY AND HORIZONTAL LIGHT
		"┰" => "+",
		// <U2530> <U002B>

		// BOX DRAWINGS RIGHT LIGHT AND LEFT DOWN HEAVY
		"┱" => "+",
		// <U2531> <U002B>

		// BOX DRAWINGS LEFT LIGHT AND RIGHT DOWN HEAVY
		"┲" => "+",
		// <U2532> <U002B>

		// BOX DRAWINGS HEAVY DOWN AND HORIZONTAL
		"┳" => "+",
		// <U2533> <U002B>

		// BOX DRAWINGS LIGHT UP AND HORIZONTAL
		"┴" => "+",
		// <U2534> <U002B>

		// BOX DRAWINGS LEFT HEAVY AND RIGHT UP LIGHT
		"┵" => "+",
		// <U2535> <U002B>

		// BOX DRAWINGS RIGHT HEAVY AND LEFT UP LIGHT
		"┶" => "+",
		// <U2536> <U002B>

		// BOX DRAWINGS UP LIGHT AND HORIZONTAL HEAVY
		"┷" => "+",
		// <U2537> <U002B>

		// BOX DRAWINGS UP HEAVY AND HORIZONTAL LIGHT
		"┸" => "+",
		// <U2538> <U002B>

		// BOX DRAWINGS RIGHT LIGHT AND LEFT UP HEAVY
		"┹" => "+",
		// <U2539> <U002B>

		// BOX DRAWINGS LEFT LIGHT AND RIGHT UP HEAVY
		"┺" => "+",
		// <U253A> <U002B>

		// BOX DRAWINGS HEAVY UP AND HORIZONTAL
		"┻" => "+",
		// <U253B> <U002B>

		// BOX DRAWINGS LIGHT VERTICAL AND HORIZONTAL
		"┼" => "+",
		// <U253C> <U002B>

		// BOX DRAWINGS LEFT HEAVY AND RIGHT VERTICAL LIGHT
		"┽" => "+",
		// <U253D> <U002B>

		// BOX DRAWINGS RIGHT HEAVY AND LEFT VERTICAL LIGHT
		"┾" => "+",
		// <U253E> <U002B>

		// BOX DRAWINGS VERTICAL LIGHT AND HORIZONTAL HEAVY
		"┿" => "+",
		// <U253F> <U002B>

		// BOX DRAWINGS UP HEAVY AND DOWN HORIZONTAL LIGHT
		"╀" => "+",
		// <U2540> <U002B>

		// BOX DRAWINGS DOWN HEAVY AND UP HORIZONTAL LIGHT
		"╁" => "+",
		// <U2541> <U002B>

		// BOX DRAWINGS VERTICAL HEAVY AND HORIZONTAL LIGHT
		"╂" => "+",
		// <U2542> <U002B>

		// BOX DRAWINGS LEFT UP HEAVY AND RIGHT DOWN LIGHT
		"╃" => "+",
		// <U2543> <U002B>

		// BOX DRAWINGS RIGHT UP HEAVY AND LEFT DOWN LIGHT
		"╄" => "+",
		// <U2544> <U002B>

		// BOX DRAWINGS LEFT DOWN HEAVY AND RIGHT UP LIGHT
		"╅" => "+",
		// <U2545> <U002B>

		// BOX DRAWINGS RIGHT DOWN HEAVY AND LEFT UP LIGHT
		"╆" => "+",
		// <U2546> <U002B>

		// BOX DRAWINGS DOWN LIGHT AND UP HORIZONTAL HEAVY
		"╇" => "+",
		// <U2547> <U002B>

		// BOX DRAWINGS UP LIGHT AND DOWN HORIZONTAL HEAVY
		"╈" => "+",
		// <U2548> <U002B>

		// BOX DRAWINGS RIGHT LIGHT AND LEFT VERTICAL HEAVY
		"╉" => "+",
		// <U2549> <U002B>

		// BOX DRAWINGS LEFT LIGHT AND RIGHT VERTICAL HEAVY
		"╊" => "+",
		// <U254A> <U002B>

		// BOX DRAWINGS HEAVY VERTICAL AND HORIZONTAL
		"╋" => "+",
		// <U254B> <U002B>

		// BOX DRAWINGS LIGHT DOUBLE DASH HORIZONTAL
		"╌" => "-",
		// <U254C> <U002D>

		// BOX DRAWINGS HEAVY DOUBLE DASH HORIZONTAL
		"╍" => "=",
		// <U254D> <U003D>

		// BOX DRAWINGS LIGHT DOUBLE DASH VERTICAL
		"╎" => "|",
		// <U254E> <U007C>

		// BOX DRAWINGS HEAVY DOUBLE DASH VERTICAL
		"╏" => "|",
		// <U254F> <U007C>

		// BOX DRAWINGS DOUBLE HORIZONTAL
		"═" => "=",
		// <U2550> <U003D>

		// BOX DRAWINGS DOUBLE VERTICAL
		"║" => "|",
		// <U2551> <U007C>

		// BOX DRAWINGS DOWN SINGLE AND RIGHT DOUBLE
		"╒" => "+",
		// <U2552> <U002B>

		// BOX DRAWINGS DOWN DOUBLE AND RIGHT SINGLE
		"╓" => "+",
		// <U2553> <U002B>

		// BOX DRAWINGS DOUBLE DOWN AND RIGHT
		"╔" => "+",
		// <U2554> <U002B>

		// BOX DRAWINGS DOWN SINGLE AND LEFT DOUBLE
		"╕" => "+",
		// <U2555> <U002B>

		// BOX DRAWINGS DOWN DOUBLE AND LEFT SINGLE
		"╖" => "+",
		// <U2556> <U002B>

		// BOX DRAWINGS DOUBLE DOWN AND LEFT
		"╗" => "+",
		// <U2557> <U002B>

		// BOX DRAWINGS UP SINGLE AND RIGHT DOUBLE
		"╘" => "+",
		// <U2558> <U002B>

		// BOX DRAWINGS UP DOUBLE AND RIGHT SINGLE
		"╙" => "+",
		// <U2559> <U002B>

		// BOX DRAWINGS DOUBLE UP AND RIGHT
		"╚" => "+",
		// <U255A> <U002B>

		// BOX DRAWINGS UP SINGLE AND LEFT DOUBLE
		"╛" => "+",
		// <U255B> <U002B>

		// BOX DRAWINGS UP DOUBLE AND LEFT SINGLE
		"╜" => "+",
		// <U255C> <U002B>

		// BOX DRAWINGS DOUBLE UP AND LEFT
		"╝" => "+",
		// <U255D> <U002B>

		// BOX DRAWINGS VERTICAL SINGLE AND RIGHT DOUBLE
		"╞" => "+",
		// <U255E> <U002B>

		// BOX DRAWINGS VERTICAL DOUBLE AND RIGHT SINGLE
		"╟" => "+",
		// <U255F> <U002B>

		// BOX DRAWINGS DOUBLE VERTICAL AND RIGHT
		"╠" => "+",
		// <U2560> <U002B>

		// BOX DRAWINGS VERTICAL SINGLE AND LEFT DOUBLE
		"╡" => "+",
		// <U2561> <U002B>

		// BOX DRAWINGS VERTICAL DOUBLE AND LEFT SINGLE
		"╢" => "+",
		// <U2562> <U002B>

		// BOX DRAWINGS DOUBLE VERTICAL AND LEFT
		"╣" => "+",
		// <U2563> <U002B>

		// BOX DRAWINGS DOWN SINGLE AND HORIZONTAL DOUBLE
		"╤" => "+",
		// <U2564> <U002B>

		// BOX DRAWINGS DOWN DOUBLE AND HORIZONTAL SINGLE
		"╥" => "+",
		// <U2565> <U002B>

		// BOX DRAWINGS DOUBLE DOWN AND HORIZONTAL
		"╦" => "+",
		// <U2566> <U002B>

		// BOX DRAWINGS UP SINGLE AND HORIZONTAL DOUBLE
		"╧" => "+",
		// <U2567> <U002B>

		// BOX DRAWINGS UP DOUBLE AND HORIZONTAL SINGLE
		"╨" => "+",
		// <U2568> <U002B>

		// BOX DRAWINGS DOUBLE UP AND HORIZONTAL
		"╩" => "+",
		// <U2569> <U002B>

		// BOX DRAWINGS VERTICAL SINGLE AND HORIZONTAL DOUBLE
		"╪" => "+",
		// <U256A> <U002B>

		// BOX DRAWINGS VERTICAL DOUBLE AND HORIZONTAL SINGLE
		"╫" => "+",
		// <U256B> <U002B>

		// BOX DRAWINGS DOUBLE VERTICAL AND HORIZONTAL
		"╬" => "+",
		// <U256C> <U002B>

		// BOX DRAWINGS LIGHT ARC DOWN AND RIGHT
		"╭" => "+",
		// <U256D> <U002B>

		// BOX DRAWINGS LIGHT ARC DOWN AND LEFT
		"╮" => "+",
		// <U256E> <U002B>

		// BOX DRAWINGS LIGHT ARC UP AND LEFT
		"╯" => "+",
		// <U256F> <U002B>

		// BOX DRAWINGS LIGHT ARC UP AND RIGHT
		"╰" => "+",
		// <U2570> <U002B>

		// BOX DRAWINGS LIGHT DIAGONAL UPPER RIGHT TO LOWER LEFT
		"╱" => "/",
		// <U2571> <U002F>

		// BOX DRAWINGS LIGHT DIAGONAL UPPER LEFT TO LOWER RIGHT
		"╲" => "\\",
		// <U2572> <U005C>

		// BOX DRAWINGS LIGHT DIAGONAL CROSS
		"╳" => "X",
		// <U2573> <U0058>

		// BOX DRAWINGS LIGHT LEFT AND HEAVY RIGHT
		"╼" => "-",
		// <U257C> <U002D>

		// BOX DRAWINGS LIGHT UP AND HEAVY DOWN
		"╽" => "|",
		// <U257D> <U007C>

		// BOX DRAWINGS HEAVY LEFT AND LIGHT RIGHT
		"╾" => "-",
		// <U257E> <U002D>

		// BOX DRAWINGS HEAVY UP AND LIGHT DOWN
		"╿" => "|",
		// <U257F> <U007C>

		// WHITE CIRCLE
		"○" => "o",
		// <U25CB> <U006F>

		// WHITE BULLET
		"◦" => "{\\textopenbullet}",
		// <U25E6> <U006F>

		// BLACK STAR
		"★" => "*",
		// <U2605> <U002A>

		// WHITE STAR
		"☆" => "*",
		// <U2606> <U002A>

		// BALLOT BOX WITH X
		"☒" => "X",
		// <U2612> <U0058>

		// SALTIRE
		"☓" => "X",
		// <U2613> <U0058>

		// WHITE FROWNING FACE
		"☹" => ":-(",
		// <U2639> "<U003A><U002D><U0028>"

		// WHITE SMILING FACE
		"☺" => ":-)",
		// <U263A> "<U003A><U002D><U0029>"

		// BLACK SMILING FACE
		"☻" => "(-:",
		// <U263B> "<U0028><U002D><U003A>"

		// MUSIC FLAT SIGN
		"♭" => "b",
		// <U266D> <U0062>

		// MUSIC SHARP SIGN
		"♯" => '$\\#$',
		// <U266F> <U0023>

		// UPPER BLADE SCISSORS
		"✁" => '$\\%<$',
		// <U2701> "<U0025><U003C>"

		// BLACK SCISSORS
		"✂" => '$\\%<$',
		// <U2702> "<U0025><U003C>"

		// LOWER BLADE SCISSORS
		"✃" => '$\\%<$',
		// <U2703> "<U0025><U003C>"

		// WHITE SCISSORS
		"✄" => '$\\%<$',
		// <U2704> "<U0025><U003C>"

		// VICTORY HAND
		"✌" => "V",
		// <U270C> <U0056>

		// CHECK MARK
		"✓" => "v", // "√"
		// <U2713> <U221A>

		// HEAVY CHECK MARK
		"✔" => "V", // "√"
		// <U2714> <U221A>

		// MULTIPLICATION X
		"✕" => "x",
		// <U2715> <U0078>

		// HEAVY MULTIPLICATION X
		"✖" => "x",
		// <U2716> <U0078>

		// BALLOT X
		"✗" => "X",
		// <U2717> <U0058>

		// HEAVY BALLOT X
		"✘" => "X",
		// <U2718> <U0058>

		// OUTLINED GREEK CROSS
		"✙" => "+",
		// <U2719> <U002B>

		// HEAVY GREEK CROSS
		"✚" => "+",
		// <U271A> <U002B>

		// OPEN CENTRE CROSS
		"✛" => "+",
		// <U271B> <U002B>

		// HEAVY OPEN CENTRE CROSS
		"✜" => "+",
		// <U271C> <U002B>

		// LATIN CROSS
		"✝" => "+",
		// <U271D> <U002B>

		// SHADOWED WHITE LATIN CROSS
		"✞" => "+",
		// <U271E> <U002B>

		// OUTLINED LATIN CROSS
		"✟" => "+",
		// <U271F> <U002B>

		// MALTESE CROSS
		"✠" => "+",
		// <U2720> <U002B>

		// STAR OF DAVID
		"✡" => "*",
		// <U2721> <U002A>

		// FOUR TEARDROP-SPOKED ASTERISK
		"✢" => "+",
		// <U2722> <U002B>

		// FOUR BALLOON-SPOKED ASTERISK
		"✣" => "+",
		// <U2723> <U002B>

		// HEAVY FOUR BALLOON-SPOKED ASTERISK
		"✤" => "+",
		// <U2724> <U002B>

		// FOUR CLUB-SPOKED ASTERISK
		"✥" => "+",
		// <U2725> <U002B>

		// BLACK FOUR POINTED STAR
		"✦" => "+",
		// <U2726> <U002B>

		// WHITE FOUR POINTED STAR
		"✧" => "+",
		// <U2727> <U002B>

		// STRESS OUTLINED WHITE STAR
		"✩" => "*",
		// <U2729> <U002A>

		// CIRCLED WHITE STAR
		"✪" => "*",
		// <U272A> <U002A>

		// OPEN CENTRE BLACK STAR
		"✫" => "*",
		// <U272B> <U002A>

		// BLACK CENTRE WHITE STAR
		"✬" => "*",
		// <U272C> <U002A>

		// OUTLINED BLACK STAR
		"✭" => "*",
		// <U272D> <U002A>

		// HEAVY OUTLINED BLACK STAR
		"✮" => "*",
		// <U272E> <U002A>

		// PINWHEEL STAR
		"✯" => "*",
		// <U272F> <U002A>

		// SHADOWED WHITE STAR
		"✰" => "*",
		// <U2730> <U002A>

		// HEAVY ASTERISK
		"✱" => "*",
		// <U2731> <U002A>

		// OPEN CENTRE ASTERISK
		"✲" => "*",
		// <U2732> <U002A>

		// EIGHT SPOKED ASTERISK
		"✳" => "*",
		// <U2733> <U002A>

		// EIGHT POINTED BLACK STAR
		"✴" => "*",
		// <U2734> <U002A>

		// EIGHT POINTED PINWHEEL STAR
		"✵" => "*",
		// <U2735> <U002A>

		// SIX POINTED BLACK STAR
		"✶" => "*",
		// <U2736> <U002A>

		// EIGHT POINTED RECTILINEAR BLACK STAR
		"✷" => "*",
		// <U2737> <U002A>

		// HEAVY EIGHT POINTED RECTILINEAR BLACK STAR
		"✸" => "*",
		// <U2738> <U002A>

		// TWELVE POINTED BLACK STAR
		"✹" => "*",
		// <U2739> <U002A>

		// SIXTEEN POINTED ASTERISK
		"✺" => "*",
		// <U273A> <U002A>

		// TEARDROP-SPOKED ASTERISK
		"✻" => "*",
		// <U273B> <U002A>

		// OPEN CENTRE TEARDROP-SPOKED ASTERISK
		"✼" => "*",
		// <U273C> <U002A>

		// HEAVY TEARDROP-SPOKED ASTERISK
		"✽" => "*",
		// <U273D> <U002A>

		// SIX PETALLED BLACK AND WHITE FLORETTE
		"✾" => "*",
		// <U273E> <U002A>

		// BLACK FLORETTE
		"✿" => "*",
		// <U273F> <U002A>

		// WHITE FLORETTE
		"❀" => "*",
		// <U2740> <U002A>

		// EIGHT PETALLED OUTLINED BLACK FLORETTE
		"❁" => "*",
		// <U2741> <U002A>

		// CIRCLED OPEN CENTRE EIGHT POINTED STAR
		"❂" => "*",
		// <U2742> <U002A>

		// HEAVY TEARDROP-SPOKED PINWHEEL ASTERISK
		"❃" => "*",
		// <U2743> <U002A>

		// SNOWFLAKE
		"❄" => "*",
		// <U2744> <U002A>

		// TIGHT TRIFOLIATE SNOWFLAKE
		"❅" => "*",
		// <U2745> <U002A>

		// HEAVY CHEVRON SNOWFLAKE
		"❆" => "*",
		// <U2746> <U002A>

		// SPARKLE
		"❇" => "*",
		// <U2747> <U002A>

		// HEAVY SPARKLE
		"❈" => "*",
		// <U2748> <U002A>

		// BALLOON-SPOKED ASTERISK
		"❉" => "*",
		// <U2749> <U002A>

		// EIGHT TEARDROP-SPOKED PROPELLER ASTERISK
		"❊" => "*",
		// <U274A> <U002A>

		// HEAVY EIGHT TEARDROP-SPOKED PROPELLER ASTERISK
		"❋" => "*",
		// <U274B> <U002A>

		// LATIN SMALL LIGATURE FF
		"ﬀ" => "ff",
		// <UFB00> "<U0066><U0066>"

		// LATIN SMALL LIGATURE FI
		"ﬁ" => "fi",
		// <UFB01> "<U0066><U0069>"

		// LATIN SMALL LIGATURE FL
		"ﬂ" => "fl",
		// <UFB02> "<U0066><U006C>"

		// LATIN SMALL LIGATURE FFI
		"ﬃ" => "ffi",
		// <UFB03> "<U0066><U0066><U0069>"

		// LATIN SMALL LIGATURE FFL
		"ﬄ" => "ffl",
		// <UFB04> "<U0066><U0066><U006C>"

		// LATIN SMALL LIGATURE LONG S T
		"ﬅ" => "st", // "ſt"
		// <UFB05> "<U017F><U0074>";"<U0073><U0074>"

		// LATIN SMALL LIGATURE ST
		"ﬆ" => "st"
		// <UFB06> "<U0073><U0074>"

	);

?>
