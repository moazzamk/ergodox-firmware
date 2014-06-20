#!/opt/local/bin/php
<?php

/**
 * Script to convert old layout to new layout (partial-rewrite compatible)
 */

$options = getopt('', ['input::', 'output::']);

if (empty($options['input']) || empty($options['output'])) {
	die('input and output required');
}



function replace_keys($string)
{
	$keys = [
		
		'KEY_ErrorRollOver ' => ''
		'KEY_POSTFail' => '',
		'KEY_ErrorUndefined' => '',
		'KEY_a_A' => 'a',
		'KEY_b_B' => 'b',
		'KEY_c_C' => 'c',
		'KEY_d_D' => 'd',
		'KEY_e_E' => 'e',
		'KEY_f_F' => 'f',
		'KEY_g_G' => 'g',
		'KEY_h_H' => 'h',
		'KEY_i_I' => 'i',
		'KEY_j_J' => 'j',
		'KEY_k_K' => 'k',
		'KEY_l_L' => 'l',
		'KEY_m_M' => 'm',
		'KEY_n_N' => 'n',
		'KEY_o_O' => 'o',
		'KEY_p_P' => 'p',
		'KEY_q_Q' => 'q',
		'KEY_r_R' => 'r',
		'KEY_s_S' => 's',
		'KEY_t_T' => 't',
		'KEY_u_U' => 'u',
		'KEY_v_V' => 'v',
		'KEY_w_W' => 'w',
		'KEY_x_X' => 'x',
		'KEY_y_Y' => 'y',
		'KEY_z_Z' => 'z',
		'KEY_1_Exclamation' => '1',
		'KEY_2_At' => '2',
		'KEY_3_Pound' => '3',
		'KEY_4_Dollar' => '4',
		'KEY_5_Percent' => '5',
		'KEY_6_Caret' => '6',
		'KEY_7_Ampersand' => '7',
		'KEY_8_Asterisk' => '8',
		'KEY_9_LeftParenthesis' => '9',
		'KEY_0_RightParenthesis' => '0',
		'KEY_ReturnEnter' => 'enter',
		'KEY_Escape' => 'esc',
		'KEY_DeleteBackspace' => 'bs',
		'KEY_Tab' => 'tab',
		'KEY_Spacebar' => 'space',
		'KEY_Dash_Underscore' => 'dash',
		'KEY_Equal_Plus' => 'equal',
		'KEY_LeftBracket_LeftBrace ' => 'brktL',
		'KEY_RightBracket_RightBrace' => 'brktR',
		'KEY_Backslash_Pipe' => 'bkslash',
		'KEY_NonUS_Pound_Tilde ' => '',
		'KEY_Semicolon_Colon' => '',
		'KEY_SingleQuote_DoubleQuote' => 'quote',
		'KEY_GraveAccent_Tilde ' => 'grave',
		'KEY_Comma_LessThan' => 'comma',
		'KEY_Period_GreaterThan' => 'period',
		'KEY_Slash_Question' => 'slash',
		'KEY_CapsLock' => '',
		'KEY_F1' => 'F1',
		'KEY_F2' => 'F2',
		'KEY_F3' => 'F3',
		'KEY_F4' => 'F4',
		'KEY_F5' => 'F5',
		'KEY_F6' => 'F6',
		'KEY_F7' => 'F7',
		'KEY_F8' => 'F8',
		'KEY_F9' => 'F9',
		'KEY_F10' => 'F10',
		'KEY_F11' => 'F11',
		'KEY_F12' => 'F12',
		'KEY_PrintScreen' => '',
		'KEY_ScrollLock' => '',
		'KEY_Pause' => pause,
		'KEY_Insert' => '',
		'KEY_Home' => 'home',
		'KEY_PageUp' => 'pageU',
		'KEY_DeleteForward' => 'del',
		'KEY_End' => 'end',
		'KEY_PageDown' => 'pageD',
		'KEY_RightArrow' => 'arrowR',
		'KEY_LeftArrow' => 'arrowL',
		'KEY_DownArrow' => 'arrowD',
		'KEY_UpArrow' => 'arrowU',

		'KEYPAD_NumLock_Clear' => '',
		'KEYPAD_Slash' => '',
		'KEYPAD_Asterisk' => '',
		'KEYPAD_Minus' => '',
		'KEYPAD_Plus' => '',
		'KEYPAD_ENTER' => '',
		'KEYPAD_1_End' => '',
		'KEYPAD_2_DownArrow' => '',
		'KEYPAD_3_PageDown' => '',
		'KEYPAD_4_LeftArrow' => '',
		'KEYPAD_5' => '',
		'KEYPAD_6_RightArrow' => '',
		'KEYPAD_7_Home' => '',
		'KEYPAD_8_UpArrow' => '',
		'KEYPAD_9_PageUp' => '',
		'KEYPAD_' => '',
		'KEYPAD_Period_Delete' => '',

		'KEY_NonUS_Backslash_Pipe' => '',
		'KEY_Application' => '',
		'KEY_Power' => '',

		'KEYPAD_Equal' => '',

		'KEY_F13' => 'F13',
		'KEY_F14' => 'F14',
		'KEY_F15' => 'F15',
		'KEY_F16' => 'F16',
		'KEY_F17' => 'F17',
		'KEY_F18' => 'F18',
		'KEY_F19' => 'F19',
		'KEY_F20' => 'F20',
		'KEY_F21' => 'F21',
		'KEY_F22' => 'F22',
		'KEY_F23' => 'F23',
		'KEY_F24' => 'F24',
		'KEY_Execute' => '',
		'KEY_Help' => '',
		'KEY_Menu' => '',
		'KEY_Select' => '',
		'KEY_Stop' => '',
		'KEY_Again' => '',
		'KEY_Undo' => '',
		'KEY_Cut' => '',
		'KEY_Copy' => '',
		'KEY_Paste' => '',
		'KEY_Find' => '',
		'KEY_Mute' => 'mute',
		'KEY_VolumeUp' => 'volumeU',
		'KEY_VolumeDown' => 'volumeD',
		'KEY_LockingCapsLock' => '',
		'KEY_LockingNumLock' => '',
		'KEY_LockingScrollLock' => '',

		'KEYPAD_Comma' => '',
		'KEYPAD_EqualSign' => '',

		'KEY_International1' => '',
		'KEY_International2' => '',
		'KEY_International3' => '',
		'KEY_International4' => '',
		'KEY_International5' => '',
		'KEY_International6' => '',
		'KEY_International7' => '',
		'KEY_International8' => '',
		'KEY_International9' => '',
		'KEY_LANG1' => '',
		'KEY_LANG2' => '',
		'KEY_LANG3' => '',
		'KEY_LANG4' => '',
		'KEY_LANG5' => '',
		'KEY_LANG6' => '',
		'KEY_LANG7' => '',
		'KEY_LANG8' => '',
		'KEY_LANG9' => '',
		'KEY_AlternateErase' => '',
		'KEY_SysReq_Attention' => '',
		'KEY_Cancel' => '',
		'KEY_Clear' => '',
		'KEY_Prior' => '',
		'KEY_Return' => '',
		'KEY_Separator' => '',
		'KEY_Out' => '',
		'KEY_Oper' => '',
		'KEY_Clear_Again' => '',
		'KEY_CrSel_Props' => '',
		'KEY_ExSel' => '',

		//      (Reserved)' => '',

		'KEYPAD_' => '',
		'KEYPAD_' => '',

		'KEY_ThousandsSeparator ' => '',
		'KEY_DecimalSeparator' => '',
		'KEY_CurrencyUnit' => '',
		'KEY_CurrencySubunit' => '',

		'KEYPAD_LeftParenthesis' => '',
		'KEYPAD_RightParenthesis' => '',
		'KEYPAD_LeftBrace' => '',
		'KEYPAD_RightBrace' => '',

		'KEYPAD_Tab' => '',
		'KEYPAD_Backspace' => '',
		'KEYPAD_A' => '',
		'KEYPAD_B' => '',
		'KEYPAD_C' => '',
		'KEYPAD_D' => '',
		'KEYPAD_E' => '',
		'KEYPAD_F' => '',
		'KEYPAD_XOR' => '',
		'KEYPAD_Caret' => '',
		'KEYPAD_Percent' => '',
		'KEYPAD_LessThan' => '',
		'KEYPAD_GreaterThan' => '',
		'KEYPAD_Ampersand' => '',
		'KEYPAD_AmpersandAmpersand' => '',
		'KEYPAD_Pipe' => '',
		'KEYPAD_PipePipe' => '',
		'KEYPAD_Colon' => '',
		'KEYPAD_Pound' => '',
		'KEYPAD_Space' => '',
		'KEYPAD_At' => '',
		'KEYPAD_Exclamation' => '',
		'KEYPAD_MemoryStore' => '',
		'KEYPAD_MemoryRecall' => '',
		'KEYPAD_MemoryClear' => '',
		'KEYPAD_MemoryAdd' => '',
		'KEYPAD_MemorySubtract' => '',
		'KEYPAD_MemoryMultiply' => '',
		'KEYPAD_MemoryDivide' => '',
		'KEYPAD_PlusMinus' => '',
		'KEYPAD_Clear' => '',
		'KEYPAD_ClearEntry' => '',
		'KEYPAD_Binary' => '',
		'KEYPAD_Octal' => '',
		'KEYPAD_Decimal' => '',
		'KEYPAD_Hexadecimal' => '',

		//     (Reserved)

		'KEY_LeftControl' => 'ctrlL',
		'KEY_LeftShift' => 'shL2kcap',
		'KEY_LeftAlt' => 'altL',
		'KEY_LeftGUI' => 'guiL',
		'KEY_RightControl' => 'ctrlR',
		'KEY_RightShift' => 'shL2kcap',
		'KEY_RightAlt' => 'altR',
		'KEY_RightGUI' => 'guiR',

	];


function get_header()
	$beginning =<<<C
		/* ----------------------------------------------------------------------------
		 * Copyright (c) 2
		 * Released under The MIT License (see "doc/licenses/MIT.md")
		 * Project located at <https://github.com/benblazak/ergodox-firmware>
		 * ------------------------------------------------------------------------- */

		/**  description
		 * My QWERTY layout, at the moment.  I imagine this will evolve over time.
		 * Once I'm done with the Arensito layout, it may disappear altogether.
		 *
		 * Implements the "layout" section of '.../firmware/keyboard.h'
		 */


		#include "./fragments/includes.part.h"
		#include "./fragments/macros.part.h"
		#include "./fragments/types.part.h"
		#include "./fragments/variables.part.h"


		// ----------------------------------------------------------------------------
		// keys
		// ----------------------------------------------------------------------------

		#include "./fragments/keys.part.h"


		// ----------------------------------------------------------------------------
		// LED control
		// ----------------------------------------------------------------------------

		#include "./fragments/led-control.part.h"


		// ----------------------------------------------------------------------------
		// matrix control
		// ----------------------------------------------------------------------------

		#include "./fragments/matrix-control.part.h"


		// ----------------------------------------------------------------------------
		// layout
		// ----------------------------------------------------------------------------

		static layout_t layout PROGMEM = {
		// ............................................................................


C;

	return $beginning;
}
