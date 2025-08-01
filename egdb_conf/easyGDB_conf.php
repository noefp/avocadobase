<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$egdb_files_folder = "avocadobase";

$easy_gdb_path = "$root_path/easy_gdb";
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$downloads_path = "downloads";
$annotations_path = "$root_path/annotations";
$blast_dbs_path = "$root_path/blast_dbs";
$lookup_path = "$root_path/lookup"; //from root 
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$json_files_path = "$root_path/$egdb_files_folder/json_files";

//$annotation_links_path = "$root_path/$egdb_files_folder/annotations";

//Expression
$expression_path = "$root_path/expression_data/AvoBase";

// Select 1 to store annotations in files or 0 to store annotations in a relational database
$file_database = 1;

// header
$dbTitle = "AvoBase";
$header_img = 0;
$db_logo = "avobase_logo.png";

// Toolbar
$tb_rm_home = 1;
$tb_about = 0;
$tb_downloads = 0;
$tb_species = 0;
$tb_search_box = 1;
$tb_tools = 0;
$tb_search = 0;
$tb_blast = 0;
$tb_jbrowse = 0;
$tb_seq_ext = 0;
$tb_annot_ext = 0;
$tb_gene_expr = 0;
$tb_lookup = 0;
$tb_enrichment = 0;
$tb_more = 0;
$tb_custom = 1;

// Expression Atlas
//$expr_cards = 1;
$expr_menu = 1;

// Expression tools order: 0 for not shown, >=1 to setup the order
$positions=[  
  'description' => 1,
  'cartoons' => 2,
  'lines' => 3,
  'cards' => 4,
  'heatmap' => 5,
  'replicates' => 6,
  'table' => 7
];

// About
$ab_citation = 0;
$ab_labs = 0;

//Gene examples
$gene_sample = "";
$input_gene_list="PaHa01g00010.1
PaHa01g00020.1
PaHa01g00030.1
PaHa01g00040.1
PaHa01g00050.1";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 10;
$max_expression_input = 15;
$max_annotation_input = 15000;


// BLAST
$blast_example=">protein_or_DNA
ATGAAGAAAATTGCCGAGCTAGTGCTGATTCCTGCTCCAGCATTAGGCCATCTCACACCC
AAAATTGAGTTCGCAAAGCGCTTGCTGGATCGCGATGATCGATTTTCAATAACTGTTCTC
ATAATGAGGCCTGGTCCTGTTCCTGATGCCATTCTAGCACATGTTGAATCACTTGCAGCC
TCCGATACTCGAATAAAATTCATCAATCTGCCCCGTTCTGTTGATCACAATCCTTTGATG
GAGCTTCCCAAGTCCGCGGACAAGTTATTCTCAGATCTTCTGGAAGCCCAGAAGCCTTAT
GTTAAAGAGGCTATTATAAAGCATGCGATTTCTAATCCAAACTCAGCTCCTCTTGCTGGA
TTGGTGGTCGATTTCTTTTGCACATCAATGATCGATGTTGCGAATGAGCTTGGGGTACCT";

?>

