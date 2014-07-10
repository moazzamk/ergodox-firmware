/* ----------------------------------------------------------------------------
 * Copyright (c) 2013, 2014 Ben Blazak <benblazak.dev@gmail.com>
 * Released under The MIT License (see "doc/licenses/MIT.md")
 * Project located at <https://github.com/benblazak/ergodox-firmware>
 * ------------------------------------------------------------------------- */

/**                                                                 description
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

    MATRIX_LAYER(  // layer 0 : default
// macro, unused,
       K,    nop,
// left hand ...... ......... ......... ......... ......... ......... .........
     esc,        1,        2,        3,        4,        5, lpupo2l2,
     tab,        q,        w,        e,        r,        t, lpupo1l1,
   grave,        a,        s,        d,        f,        g,
shL2kcap,        z,        x,        c,        v,        b,    bkslash,
   ctrlL,    grave,  bkslash,   lpu1l1,     guiL,
                                                                guiL,     altL,
                                                       nop,      nop,     home,
                                                        bs,      del,      end,
// right hand ..... ......... ......... ......... ......... ......... .........
                 6,        7,        8,        9,        0,     dash,    equal,
             brktL,        y,        u,        i,        o,        p,    brktR,
                           h,        j,        k,        l,  semicol,    quote,
             brktR,        n,        m,    comma,   period,    slash, shR2kcap,
                                arrowL,   arrowD,   arrowU,   arrowR,     guiR,
    altR,    ctrlR,
   pageU,      nop,      nop,
   pageD,    enter,    space  ),

// ............................................................................

    MATRIX_LAYER(  // layer 1 : number pad
// macro, unused,
       K,    nop,
// left hand ...... ......... ......... ......... ......... ......... .........
  lpo1l1,   lpu1l1,   lpu2l2,   lpu3l3,   lpu4l4,   lpu5l5,   transp,
  transp,   transp,   transp,   transp,   transp,   transp,   transp,
  transp,   transp,   transp,   transp,   transp,   transp,
  transp,   transp,   transp,   transp,   transp,   transp,   transp,
   btldr,      ins,   transp,   transp,   transp,
                                                              transp,   transp,
                                                    transp,   transp,   transp,
                                                    transp,   transp,   transp,
// right hand ..... ......... ......... ......... ......... ......... .........
            lpo1l1,   transp,   lpo1l1,    equal,    slash, asterisk,   transp,
            transp,   transp,      kp7,      kp8,      kp9,     dash,   transp,
                      transp,      kp4,      kp5,      kp6,     plus,   transp,
            transp,   transp,      kp1,      kp2,      kp3,    enter,   transp,
                                transp,   transp,   period,    enter,   transp,
  transp,   transp,
  transp,   transp,   transp,
  transp,   transp,        0  ),

// ............................................................................

    MATRIX_LAYER(  // layer 2 : symbols and function keys
// macro, unused,
       K,    nop,
// left hand ...... ......... ......... ......... ......... ......... .........
  lpo2l2,       F1,       F2,       F3,       F4,       F5,      F11,
  transp,   braceL,   braceR,    brktL,    brktR,      nop,   lpo2l2,
  transp,  semicol,    slash,     dash,        0,    colon,
  transp,        6,        7,        8,        9,     plus, lpupo3l3,
  transp,   transp,   transp,   transp,   transp,
                                                              transp,   transp,
                                                    transp,   transp,   transp,
                                                    transp,   transp,   transp,
// right hand ..... ......... ......... ......... ......... ......... .........
               F6,       F7,       F8,       F9,       F10,      F11,      F12,
            lpo2l2,    caret,  undersc, lessThan, grtrThan,   dollar,  volumeU,
                     bkslash,        1,   parenL,   parenR,    equal,  volumeD,
          lpupo3l3, asterisk,        2,        3,        4,        5,     mute,
                                transp,   transp,   transp,   transp,   power,
  transp,   transp,
  transp,   transp,   transp,
  transp,   transp,   transp  ),

// ............................................................................

    MATRIX_LAYER(  // layer 3 : keyboard functions
// macro, unused,
       K,    nop,
// left hand ...... ......... ......... ......... ......... ......... .........
  lpo3l3,    btldr,      nop,      nop,      nop,      nop,      nop,
     nop,      nop,      nop,      nop,      nop,      nop,      nop,
     nop,      nop,      nop,      nop,      nop,      nop,
     nop,      nop,      nop,      nop,      nop,      nop,      nop,
     nop,      nop,      nop,      nop,      nop,
                                                                 nop,      nop,
                                                       nop,      nop,      nop,
                                                       nop,      nop,      nop,
// right hand ..... ......... ......... ......... ......... ......... .........
               nop,      nop,      nop,      nop,      nop,      nop, dmp_sram,
               nop,      nop,      nop,      nop,      nop,      nop, dmp_prog,
                         nop,      nop,      nop,      nop,      nop, dmp_eepr,
               nop,      nop,      nop,      nop,      nop,      nop,      nop,
                                   nop,      nop,      nop,      nop,      nop,
     nop,      nop,
     nop,      nop,      nop,
     nop,      nop,      nop  ),

// ............................................................................


    MATRIX_LAYER(  // layer 4 : dota 2
// macro, unused,
       K,    nop,
// left hand ...... ......... ......... ......... ......... ......... .........
  lpo4l4,        1,        2,        3,        4,        5, lpupo2l2,
     tab,        q,        w,        e,        r,        t,   lpu2l2,
 bkslash,        a,        s,        d,        f,        g,
shL2kcap,        z,        x,        c,        v,        b,    grave,
    guiL,    grave,  bkslash,   arrowL,        n,
                                                               ctrlL,     altL,
                                                       nop,      nop,     home,
                                                        bs,      del,      end,
// right hand ..... ......... ......... ......... ......... ......... .........
            lpu1l1,        6,        7,        8,        9,        0,     dash,
             brktL,        y,        u,        i,        o,        p,    brktR,
                           h,        j,        k,        l,  semicol,    quote,
             brktR,        n,        m,    comma,   period,    slash, shR2kcap,
                                arrowL,   arrowD,   arrowU,   arrowR,     guiR,
    altR,    ctrlR,
   pageU,      nop,      nop,
   pageD,    enter,    space  ),


// ............................................................................


    MATRIX_LAYER(  // layer 5 : passwords
// macro, unused,
       K,    nop,
// left hand ...... ......... ......... ......... ......... ......... .........
     esc,        i,        2,        e,        a,        5, lpupo2l2,
     tab,        q,        w,        3,        r,        t,   lpu2l2,
 bkslash,        4,        s,        d,        f,        g,
shL2kcap,        z,        x,        c,        v,        b, lpupo2l2,
    guiL,    grave,  bkslash,   arrowL,        n,
                                                               ctrlL,     altL,
                                                       nop,      nop,     home,
                                                        bs,      del,      end,
// right hand ..... ......... ......... ......... ......... ......... .........
            lpu1l1,        6,        7,        8,        9,        o,     dash,
             brktL,        y,        u,        1,        0,        p,    brktR,
                           h,        j,        k,        l,  semicol,    quote,
          lpupo2l2,        n,        m,    comma,   period,    slash, shR2kcap,
                                arrowL,   arrowD,   arrowU,   arrowR,     guiR,
    altR,    ctrlR,
   pageU,      nop,      nop,
   pageD,    enter,    space  ),
};

