<?php

function wypiszemy($tab,$sciezka)
	{
	for($i=0;$i<count($tab);$i++)
		{
			echo'<a href="'.$sciezka.$tab[$i].'.php" >'.$tab[$i].'();</a><br/>';
		}
	}

$tabkernel=array(754);
$tabkernel[0]='wWinMain';
$tabkernel[1]='_hread';
$tabkernel[2]='_hwrite';
$tabkernel[3]='_lclose';
$tabkernel[4]='_lcreat';
$tabkernel[5]='_llseek';
$tabkernel[6]='_lopen';
$tabkernel[7]='_lread';
$tabkernel[8]='_lwrite';
$tabkernel[9]='AccessCheck';
$tabkernel[10]='AccessCheckAndAuditAlarmA';
$tabkernel[11]='AccessCheckAndAuditAlarmW';
$tabkernel[12]='ActivateActCtx';
$tabkernel[13]='AddAccessAllowedAce';
$tabkernel[14]='AddAccessDeniedAce';
$tabkernel[15]='AddAccessAllowedAceEx';
$tabkernel[16]='AddAccessDeniedAceEx';
$tabkernel[17]='AddAce';
$tabkernel[18]='AddAtomA';
$tabkernel[19]='AddAtomW';
$tabkernel[20]='AddAuditAccessAce';
$tabkernel[21]='AddRefActCtx';
$tabkernel[22]='AddVectoredExceptionHandler';
$tabkernel[23]='AdjustTokenGroups';
$tabkernel[24]='AdjustTokenPrivileges';
$tabkernel[25]='AllocateAndInitializeSid';
$tabkernel[26]='AllocateLocallyUniqueId';
$tabkernel[27]='AreAllAccessesGranted';
$tabkernel[28]='AreAnyAccessesGranted';
$tabkernel[29]='AreFileApisANSI';
$tabkernel[30]='BackupEventLogA';
$tabkernel[31]='BackupEventLogW';
$tabkernel[32]='BackupRead';
$tabkernel[33]='BackupSeek';
$tabkernel[34]='BackupWrite';
$tabkernel[35]='Beep';
$tabkernel[36]='BeginUpdateResourceA';
$tabkernel[37]='BeginUpdateResourceW';
$tabkernel[38]='BuildCommDCBA';
$tabkernel[39]='BuildCommDCBW';
$tabkernel[40]='BuildCommDCBAndTimeoutsA';
$tabkernel[41]='BuildCommDCBAndTimeoutsW';
$tabkernel[42]='CallNamedPipeA';
$tabkernel[43]='CallNamedPipeW';
$tabkernel[44]='CancelDeviceWakeupRequest';
$tabkernel[45]='CancelIo';
$tabkernel[46]='CancelWaitableTimer';
$tabkernel[47]='ChangeTimerQueueTimer';
$tabkernel[48]='CheckNameLegalDOS8Dot3A';
$tabkernel[49]='CheckNameLegalDOS8Dot3W';
$tabkernel[50]='CheckRemoteDebuggerPresent';
$tabkernel[51]='CheckTokenMembership';
$tabkernel[52]='ClearCommBreak';
$tabkernel[53]='ClearCommError';
$tabkernel[54]='ClearEventLogA';
$tabkernel[55]='ClearEventLogW';
$tabkernel[56]='CloseEventLog';
$tabkernel[57]='CloseHandle';
$tabkernel[58]='CommConfigDialogA';
$tabkernel[59]='CommConfigDialogW';
$tabkernel[60]='CompareFileTime';
$tabkernel[61]='ConnectNamedPipe';
$tabkernel[62]='ContinueDebugEvent';
$tabkernel[63]='ConvertFiberToThread';
$tabkernel[64]='ConvertThreadToFiber';
$tabkernel[65]='CopyFileA';
$tabkernel[66]='CopyFileW';
$tabkernel[67]='CopyFileExA';
$tabkernel[68]='CopyFileExW';
$tabkernel[69]='CopySid';
$tabkernel[70]='CreateActCtxA';
$tabkernel[71]='CreateActCtxW';
$tabkernel[72]='CreateDirectoryA';
$tabkernel[73]='CreateDirectoryW';
$tabkernel[74]='CreateDirectoryExA';
$tabkernel[75]='CreateDirectoryExW';
$tabkernel[76]='CreateEventA';
$tabkernel[77]='CreateEventW';
$tabkernel[78]='CreateFiber';
$tabkernel[79]='CreateFiberEx';
$tabkernel[80]='CreateFileA';
$tabkernel[81]='CreateFileW';
$tabkernel[82]='CreateFileMappingA';
$tabkernel[83]='CreateFileMappingW';
$tabkernel[84]='CreateHardLinkA';
$tabkernel[85]='CreateHardLinkW';
$tabkernel[86]='CreateIoCompletionPort';
$tabkernel[87]='CreateJobObjectA';
$tabkernel[88]='CreateJobObjectW';
$tabkernel[89]='TerminateJobObject';
$tabkernel[90]='AssignProcessToJobObject';
$tabkernel[91]='SetInformationJobObject';
$tabkernel[92]='QueryInformationJobObject';
$tabkernel[93]='CreateMailslotA';
$tabkernel[94]='CreateMailslotW';
$tabkernel[95]='CreateMemoryResourceNotification';
$tabkernel[96]='CreateMutexA';
$tabkernel[97]='CreateMutexW';
$tabkernel[98]='CreateNamedPipeA';
$tabkernel[99]='CreateNamedPipeW';
$tabkernel[100]='CreatePipe';
$tabkernel[101]='CreatePrivateObjectSecurity';
$tabkernel[102]='CreateProcessA';
$tabkernel[103]='CreateProcessW';
$tabkernel[104]='CreateProcessAsUserA';
$tabkernel[105]='CreateProcessAsUserW';
$tabkernel[106]='CreateProcessWithLogonW';
$tabkernel[107]='CreateRemoteThread';
$tabkernel[108]='CreateRestrictedToken';
$tabkernel[109]='CreateSemaphoreA';
$tabkernel[110]='CreateSemaphoreW';
$tabkernel[111]='CreateSymbolicLinkA';
$tabkernel[112]='CreateSymbolicLinkW';
$tabkernel[113]='CreateTapePartition';
$tabkernel[114]='CreateTimerQueue';
$tabkernel[115]='CreateTimerQueueTimer';
$tabkernel[116]='CreateThread';
$tabkernel[117]='CreateWaitableTimerA';
$tabkernel[118]='CreateWaitableTimerW';
$tabkernel[119]='DeactivateActCtx';
$tabkernel[120]='DebugActiveProcess';
$tabkernel[121]='DebugActiveProcessStop';
$tabkernel[122]='DebugBreak';
$tabkernel[123]='DebugBreakProcess';
$tabkernel[124]='DebugSetProcessKillOnExit';
$tabkernel[125]='DefineDosDeviceA';
$tabkernel[126]='DefineDosDeviceW';
$tabkernel[127]='DeleteAce';
$tabkernel[128]='DeleteAtom';
$tabkernel[129]='DeleteCriticalSection';
$tabkernel[130]='DeleteFiber';
$tabkernel[131]='DeleteFileA';
$tabkernel[132]='DeleteFileW';
$tabkernel[133]='DeleteTimerQueue';
$tabkernel[134]='DeleteTimerQueueEx';
$tabkernel[135]='DeleteTimerQueueTimer';
$tabkernel[136]='DeleteVolumeMountPointA';
$tabkernel[137]='DeleteVolumeMountPointW';
$tabkernel[138]='DeregisterEventSource';
$tabkernel[139]='DestroyPrivateObjectSecurity';
$tabkernel[140]='DeviceIoControl';
$tabkernel[141]='DisableThreadLibraryCalls';
$tabkernel[142]='DnsHostnameToComputerNameA';
$tabkernel[143]='DnsHostnameToComputerNameW';
$tabkernel[144]='DisconnectNamedPipe';
$tabkernel[145]='DosDateTimeToFileTime';
$tabkernel[146]='DuplicateHandle';
$tabkernel[147]='DuplicateToken';
$tabkernel[148]='DuplicateTokenEx';
$tabkernel[149]='EncryptFileA';
$tabkernel[150]='EncryptFileW';
$tabkernel[151]='EndUpdateResourceA';
$tabkernel[152]='EndUpdateResourceW';
$tabkernel[153]='EnterCriticalSection';
$tabkernel[154]='EnumResourceLanguagesA';
$tabkernel[155]='EnumResourceLanguagesW';
$tabkernel[156]='EnumResourceNamesA';
$tabkernel[157]='EnumResourceNamesW';
$tabkernel[158]='EnumResourceTypesA';
$tabkernel[159]='EnumResourceTypesW';
$tabkernel[160]='EqualPrefixSid';
$tabkernel[161]='EqualSid';
$tabkernel[162]='EraseTape';
$tabkernel[163]='EscapeCommFunction';
$tabkernel[164]='ExitProcess';
$tabkernel[165]='ExitThread';
$tabkernel[166]='ExpandEnvironmentStringsA';
$tabkernel[167]='ExpandEnvironmentStringsW';
$tabkernel[168]='FatalAppExitA';
$tabkernel[169]='FatalAppExitW';
$tabkernel[170]='FatalExit';
$tabkernel[171]='FileEncryptionStatusA';
$tabkernel[172]='FileEncryptionStatusW';
$tabkernel[173]='FileTimeToDosDateTime';
$tabkernel[174]='FileTimeToLocalFileTime';
$tabkernel[175]='FileTimeToSystemTime';
$tabkernel[176]='FindActCtxSectionGuid';
$tabkernel[177]='FindActCtxSectionStringA';
$tabkernel[178]='FindActCtxSectionStringW';
$tabkernel[179]='FindAtomA';
$tabkernel[180]='FindAtomW';
$tabkernel[181]='FindClose';
$tabkernel[182]='FindCloseChangeNotification';
$tabkernel[183]='FindFirstChangeNotificationA';
$tabkernel[184]='FindFirstChangeNotificationW';
$tabkernel[185]='FindFirstFileA';
$tabkernel[186]='FindFirstFileW';
$tabkernel[187]='FindFirstFileExA';
$tabkernel[188]='FindFirstFileExW';
$tabkernel[189]='FindFirstFreeAce';
$tabkernel[190]='FindFirstVolumeA';
$tabkernel[191]='FindFirstVolumeW';
$tabkernel[192]='FindFirstVolumeMountPointA';
$tabkernel[193]='FindFirstVolumeMountPointW';
$tabkernel[194]='FindNextChangeNotification';
$tabkernel[195]='FindNextFileA';
$tabkernel[196]='FindNextFileW';
$tabkernel[197]='FindNextVolumeA';
$tabkernel[198]='FindNextVolumeW';
$tabkernel[199]='FindNextVolumeMountPointA';
$tabkernel[200]='FindNextVolumeMountPointW';
$tabkernel[201]='FindVolumeClose';
$tabkernel[202]='FindVolumeMountPointClose';
$tabkernel[203]='FindResourceA';
$tabkernel[204]='FindResourceW';
$tabkernel[205]='FindResourceExA';
$tabkernel[206]='FindResourceExW';
$tabkernel[207]='GetFirmwareEnvironmentVariableA';
$tabkernel[208]='GetFirmwareEnvironmentVariableW';
$tabkernel[209]='FlushFileBuffers';
$tabkernel[210]='FlushInstructionCache';
$tabkernel[211]='FlushViewOfFile';
$tabkernel[212]='FormatMessageA';
$tabkernel[213]='FormatMessageW';
$tabkernel[214]='FreeEnvironmentStringsA';
$tabkernel[215]='FreeEnvironmentStringsW';
$tabkernel[216]='FreeLibrary';
$tabkernel[217]='FreeLibraryAndExitThread';
$tabkernel[218]='FreeResource';
$tabkernel[219]='FreeSid';
$tabkernel[220]='GetAce';
$tabkernel[221]='GetAclInformation';
$tabkernel[222]='GetAtomNameA';
$tabkernel[223]='GetAtomNameW';
$tabkernel[224]='GetBinaryTypeA';
$tabkernel[225]='GetBinaryTypeW';
$tabkernel[226]='GetCommandLineA';
$tabkernel[227]='GetCommandLineW';
$tabkernel[228]='GetCommConfig';
$tabkernel[229]='GetCommMask';
$tabkernel[230]='GetCommModemStatus';
$tabkernel[231]='GetCommProperties';
$tabkernel[232]='GetCommState';
$tabkernel[233]='GetCommTimeouts';
$tabkernel[234]='GetCompressedFileSizeA';
$tabkernel[235]='GetCompressedFileSizeW';
$tabkernel[236]='GetComputerNameA';
$tabkernel[237]='GetComputerNameW';
$tabkernel[238]='GetComputerNameExA';
$tabkernel[239]='GetComputerNameExW';
$tabkernel[240]='GetCurrentActCtx';
$tabkernel[241]='GetCurrentDirectoryA';
$tabkernel[242]='GetCurrentDirectoryW';
$tabkernel[243]='GetCurrentHwProfileA';
$tabkernel[244]='GetCurrentHwProfileW';
$tabkernel[245]='GetCurrentProcess';
$tabkernel[246]='GetCurrentProcessId';
$tabkernel[247]='GetCurrentThread';
$tabkernel[248]='GetCurrentThreadId';
$tabkernel[249]='GetCurrentThreadId';
$tabkernel[250]='GetDefaultCommConfigA';
$tabkernel[251]='GetDefaultCommConfigW';
$tabkernel[252]='GetDevicePowerState';
$tabkernel[253]='GetDiskFreeSpaceA';
$tabkernel[254]='GetDiskFreeSpaceW';
$tabkernel[255]='GetDiskFreeSpaceExA';
$tabkernel[256]='GetDiskFreeSpaceExW';
$tabkernel[257]='GetDllDirectoryA';
$tabkernel[258]='GetDllDirectoryW';
$tabkernel[259]='GetDriveTypeA';
$tabkernel[260]='GetDriveTypeW';
$tabkernel[261]='GetEnvironmentStrings';
$tabkernel[262]='GetEnvironmentStringsA';
$tabkernel[263]='GetEnvironmentStringsW';
$tabkernel[264]='GetEnvironmentVariableA';
$tabkernel[265]='GetEnvironmentVariableW';
$tabkernel[266]='GetExitCodeProcess';
$tabkernel[267]='GetExitCodeThread';
$tabkernel[268]='GetFileAttributesA';
$tabkernel[269]='GetFileAttributesW';
$tabkernel[270]='GetFileAttributesExA';
$tabkernel[271]='GetFileAttributesExW';
$tabkernel[272]='GetFileInformationByHandle';
$tabkernel[273]='GetFileInformationByHandleEx';
$tabkernel[274]='GetFileSecurityA';
$tabkernel[275]='GetFileSecurityW';
$tabkernel[276]='GetFileSize';
$tabkernel[277]='GetFileSizeEx';
$tabkernel[278]='GetFileTime';
$tabkernel[279]='GetFileType';
$tabkernel[280]='GetFinalPathNameByHandleA';
$tabkernel[281]='GetFinalPathNameByHandleW';
$tabkernel[282]='GetFullPathNameA';
$tabkernel[283]='GetFullPathNameW';
$tabkernel[284]='GetHandleInformation';
$tabkernel[285]='GetKernelObjectSecurity';
$tabkernel[286]='GetLastError';
$tabkernel[287]='GetLengthSid';
$tabkernel[288]='GetLocalTime';
$tabkernel[289]='GetLogicalDrives';
$tabkernel[290]='GetLogicalDriveStringsA';
$tabkernel[291]='GetLogicalDriveStringsW';
$tabkernel[292]='GetLongPathNameA';
$tabkernel[293]='GetLongPathNameW';
$tabkernel[294]='GetMailslotInfo';
$tabkernel[295]='GetModuleFileNameA';
$tabkernel[296]='GetModuleFileNameW';
$tabkernel[297]='GetModuleHandleA';
$tabkernel[298]='GetModuleHandleW';
$tabkernel[299]='GetModuleHandleExA';
$tabkernel[300]='GetModuleHandleExW';
$tabkernel[301]='GetNamedPipeHandleStateA';
$tabkernel[302]='GetNamedPipeHandleStateW';
$tabkernel[303]='GetNamedPipeInfo';
$tabkernel[304]='GetNativeSystemInfo';
$tabkernel[305]='GetNumberOfEventLogRecords';
$tabkernel[306]='GetOldestEventLogRecord';
$tabkernel[307]='GetOverlappedResult';
$tabkernel[308]='GetPriorityClass';
$tabkernel[309]='GetPrivateObjectSecurity';
$tabkernel[310]='GetPrivateProfileIntA';
$tabkernel[311]='GetPrivateProfileIntW';
$tabkernel[312]='GetPrivateProfileSectionA';
$tabkernel[313]='GetPrivateProfileSectionW';
$tabkernel[314]='GetPrivateProfileSectionNamesA';
$tabkernel[315]='GetPrivateProfileSectionNamesW';
$tabkernel[316]='GetPrivateProfileStringA';
$tabkernel[317]='GetPrivateProfileStringW';
$tabkernel[318]='GetPrivateProfileStructA';
$tabkernel[319]='GetPrivateProfileStructW';
$tabkernel[320]='GetProcAddress';
$tabkernel[321]='GetProcessAffinityMask';
$tabkernel[322]='GetProcessDEPPolicy';
$tabkernel[323]='GetProcessHandleCount';
$tabkernel[324]='GetProcessHeap';
$tabkernel[325]='GetProcessHeaps';
$tabkernel[326]='GetProcessId';
$tabkernel[327]='GetProcessIoCounters';
$tabkernel[328]='GetProcessPriorityBoost';
$tabkernel[329]='GetProcessShutdownParameters';
$tabkernel[330]='GetProcessTimes';
$tabkernel[331]='GetProcessVersion';
$tabkernel[332]='GetProcessWindowStation';
$tabkernel[333]='GetProcessWorkingSetSize';
$tabkernel[334]='GetProfileIntA';
$tabkernel[335]='GetProfileIntW';
$tabkernel[336]='GetProfileSectionA';
$tabkernel[337]='GetProfileSectionW';
$tabkernel[338]='GetProfileStringA';
$tabkernel[339]='GetProfileStringW';
$tabkernel[340]='GetQueuedCompletionStatus';
$tabkernel[341]='GetSecurityDescriptorControl';
$tabkernel[342]='GetSecurityDescriptorDac';
$tabkernel[343]='GetSecurityDescriptorGroup';
$tabkernel[344]='GetSecurityDescriptorLength';
$tabkernel[345]='GetSecurityDescriptorOwner';
$tabkernel[346]='GetSecurityDescriptorSacl';
$tabkernel[347]='GetShortPathNameA';
$tabkernel[348]='GetShortPathNameW';
$tabkernel[349]='GetSidIdentifierAuthority';
$tabkernel[350]='GetSidLengthRequired';
$tabkernel[351]='GetSidSubAuthority';
$tabkernel[352]='GetSidSubAuthorityCount';
$tabkernel[353]='GetStartupInfoA';
$tabkernel[354]='GetStartupInfoW';
$tabkernel[355]='GetStdHandle';
$tabkernel[356]='GetSystemDEPPolicy';
$tabkernel[357]='GetSystemDirectoryA';
$tabkernel[358]='GetSystemDirectoryW';
$tabkernel[359]='GetSystemInfo';
$tabkernel[360]='GetSystemPowerStatus';
$tabkernel[361]='GetSystemRegistryQuota';
$tabkernel[362]='GetSystemTime';
$tabkernel[363]='GetSystemTimes';
$tabkernel[364]='GetSystemTimeAdjustment';
$tabkernel[365]='GetSystemTimeAsFileTime';
$tabkernel[366]='GetSystemWindowsDirectoryA';
$tabkernel[367]='GetSystemWindowsDirectoryW';
$tabkernel[368]='GetSystemWow64DirectoryA';
$tabkernel[369]='GetSystemWow64DirectoryW';
$tabkernel[370]='GetTapeParameters';
$tabkernel[371]='GetTapePosition';
$tabkernel[372]='GetTapeStatus';
$tabkernel[373]='GetTempFileNameA';
$tabkernel[374]='GetTempFileNameW';
$tabkernel[375]='GetTempPathA';
$tabkernel[376]='GetTempPathW';
$tabkernel[377]='GetThreadContext';
$tabkernel[378]='GetThreadIOPendingFlag';
$tabkernel[379]='GetThreadPriority';
$tabkernel[380]='GetThreadPriorityBoost';
$tabkernel[381]='GetThreadSelectorEntry';
$tabkernel[382]='GetThreadTimes';
$tabkernel[383]='GetTickCount';
$tabkernel[384]='GetTimeZoneInformation';
$tabkernel[385]='GetTokenInformation';
$tabkernel[386]='GetUserNameA';
$tabkernel[387]='GetUserNameW';
$tabkernel[388]='GetVersion';
$tabkernel[389]='GetVersionExA';
$tabkernel[390]='GetVersionExW';
$tabkernel[391]='GetVolumeInformationA';
$tabkernel[392]='GetVolumeInformationW';
$tabkernel[393]='GetVolumeNameForVolumeMountPointA';
$tabkernel[394]='GetVolumeNameForVolumeMountPointW';
$tabkernel[395]='GetVolumePathNameA';
$tabkernel[396]='GetVolumePathNameW';
$tabkernel[397]='GetVolumePathNamesForVolumeNameA';
$tabkernel[398]='GetVolumePathNamesForVolumeNameW';
$tabkernel[399]='GetWindowsDirectoryA';
$tabkernel[400]='GetWindowsDirectoryW';
$tabkernel[401]='GetWindowThreadProcessId';
$tabkernel[402]='GetWriteWatch';
$tabkernel[403]='GlobalAddAtomA';
$tabkernel[404]='GlobalAddAtomW';
$tabkernel[405]='GlobalAlloc';
$tabkernel[406]='GlobalCompact';
$tabkernel[407]='GlobalDeleteAtom';
$tabkernel[408]='GlobalFindAtomA';
$tabkernel[409]='GlobalFindAtomW';
$tabkernel[410]='GlobalFix';
$tabkernel[411]='GlobalFlags';
$tabkernel[412]='GlobalFree';
$tabkernel[413]='GlobalGetAtomNameA';
$tabkernel[414]='GlobalGetAtomNameW';
$tabkernel[415]='GlobalHandle';
$tabkernel[416]='GlobalLock';
$tabkernel[417]='GlobalMemoryStatus';
$tabkernel[418]='GlobalMemoryStatusEx';
$tabkernel[419]='GlobalReAlloc';
$tabkernel[420]='GlobalSize';
$tabkernel[421]='GlobalUnfix';
$tabkernel[422]='GlobalUnlock';
$tabkernel[423]='GlobalUnWire';
$tabkernel[424]='GlobalWire';
$tabkernel[425]='HeapAlloc';
$tabkernel[426]='HeapCompact';
$tabkernel[427]='HeapCreate';
$tabkernel[428]='HeapDestroy';
$tabkernel[429]='HeapFree';
$tabkernel[430]='HeapLock';
$tabkernel[431]='HeapQueryInformation';
$tabkernel[432]='HeapReAlloc';
$tabkernel[433]='HeapSetInformation';
$tabkernel[434]='HeapSize';
$tabkernel[435]='HeapUnlock';
$tabkernel[436]='HeapValidate';
$tabkernel[437]='HeapWalk';
$tabkernel[438]='ImpersonateLoggedOnUser';
$tabkernel[439]='ImpersonateNamedPipeClient';
$tabkernel[440]='ImpersonateSelf';
$tabkernel[441]='InitAtomTable';
$tabkernel[442]='InitializeAcl';
$tabkernel[443]='InitializeCriticalSection';
$tabkernel[444]='InitializeCriticalSectionAndSpinCount';
$tabkernel[445]='SetCriticalSectionSpinCount';
$tabkernel[446]='InitializeSecurityDescriptor';
$tabkernel[447]='InitializeSid';
$tabkernel[448]='InitializeSListHead';
$tabkernel[449]='InterlockedCompareExchange';
$tabkernel[450]='InterlockedDecrement';
$tabkernel[451]='InterlockedExchange';
$tabkernel[452]='InterlockedExchangeAdd';
$tabkernel[453]='InterlockedFlushSList';
$tabkernel[454]='InterlockedIncrement';
$tabkernel[455]='InterlockedPopEntrySList';
$tabkernel[456]='InterlockedPushEntrySList';
$tabkernel[457]='IsBadCodePtr';
$tabkernel[458]='IsBadHugeReadPtr';
$tabkernel[459]='IsBadHugeWritePtr';
$tabkernel[460]='IsBadReadPtr';
$tabkernel[461]='IsBadStringPtrA';
$tabkernel[462]='IsBadStringPtrW';
$tabkernel[463]='IsBadWritePtr';
$tabkernel[464]='IsDebuggerPresent';
$tabkernel[465]='IsProcessInJob';
$tabkernel[466]='IsProcessorFeaturePresent';
$tabkernel[467]='IsSystemResumeAutomatic';
$tabkernel[468]='IsTextUnicode';
$tabkernel[469]='IsTokenRestricted';
$tabkernel[470]='IsValidAcl';
$tabkernel[471]='IsValidSecurityDescriptor';
$tabkernel[472]='IsValidSid';
$tabkernel[473]='IsWow64Process';
$tabkernel[474]='LeaveCriticalSection';
$tabkernel[475]='LoadLibraryA';
$tabkernel[476]='LoadLibraryExA';
$tabkernel[477]='LoadLibraryExW';
$tabkernel[478]='LoadLibraryW';
$tabkernel[479]='LoadModule';
$tabkernel[480]='LoadResource';
$tabkernel[481]='LocalAlloc';
$tabkernel[482]='LocalCompact';
$tabkernel[483]='LocalDiscard';
$tabkernel[484]='LocalFileTimeToFileTime';
$tabkernel[485]='LocalFlags';
$tabkernel[486]='LocalFree';
$tabkernel[487]='LocalHandle';
$tabkernel[488]='LocalLock';
$tabkernel[489]='LocalReAlloc';
$tabkernel[490]='LocalShrink';
$tabkernel[491]='LocalSize';
$tabkernel[492]='LocalUnlock';
$tabkernel[493]='LockFile';
$tabkernel[494]='LockFileEx';
$tabkernel[495]='LockResource';
$tabkernel[496]='LogonUserA';
$tabkernel[497]='LogonUserW';
$tabkernel[498]='LookupAccountNameA';
$tabkernel[499]='LookupAccountNameW';
$tabkernel[500]='LookupAccountSidA';
$tabkernel[501]='LookupAccountSidW';
$tabkernel[502]='LookupPrivilegeDisplayNameA';
$tabkernel[503]='LookupPrivilegeDisplayNameW';
$tabkernel[504]='LookupPrivilegeNameA';
$tabkernel[505]='LookupPrivilegeNameW';
$tabkernel[506]='LookupPrivilegeValueA';
$tabkernel[507]='LookupPrivilegeValueW';
$tabkernel[508]='lstrcatA';
$tabkernel[509]='lstrcatW';
$tabkernel[510]='lstrcmpA';
$tabkernel[511]='lstrcmpiA';
$tabkernel[512]='lstrcmpiW';
$tabkernel[513]='lstrcmpW';
$tabkernel[514]='lstrcpyA';
$tabkernel[515]='lstrcpynA';
$tabkernel[516]='lstrcpynW';
$tabkernel[517]='lstrcpyW';
$tabkernel[518]='lstrlenA';
$tabkernel[519]='lstrlenW';
$tabkernel[520]='MakeAbsoluteSD';
$tabkernel[521]='MakeSelfRelativeSD';
$tabkernel[522]='MapGenericMask';
$tabkernel[523]='MapViewOfFile';
$tabkernel[524]='MapViewOfFileEx';
$tabkernel[525]='MoveFileA';
$tabkernel[526]='MoveFileExA';
$tabkernel[527]='MoveFileExW';
$tabkernel[528]='MoveFileW';
$tabkernel[529]='MoveFileWithProgressA';
$tabkernel[530]='MoveFileWithProgressW';
$tabkernel[531]='MulDiv';
$tabkernel[532]='NotifyChangeEventLog';
$tabkernel[533]='ObjectCloseAuditAlarmA';
$tabkernel[534]='ObjectCloseAuditAlarmW';
$tabkernel[535]='ObjectDeleteAuditAlarmA';
$tabkernel[536]='ObjectDeleteAuditAlarmW';
$tabkernel[537]='ObjectOpenAuditAlarmA';
$tabkernel[538]='ObjectOpenAuditAlarmW';
$tabkernel[539]='ObjectPrivilegeAuditAlarmA';
$tabkernel[540]='ObjectPrivilegeAuditAlarmW';
$tabkernel[541]='OpenBackupEventLogA';
$tabkernel[542]='OpenBackupEventLogW';
$tabkernel[543]='OpenEventA';
$tabkernel[544]='OpenEventLogA';
$tabkernel[545]='OpenEventLogW';
$tabkernel[546]='OpenEventW';
$tabkernel[547]='OpenFile';
$tabkernel[548]='OpenFileMappingA';
$tabkernel[549]='OpenFileMappingW';
$tabkernel[550]='OpenMutexA';
$tabkernel[551]='OpenMutexW';
$tabkernel[552]='OpenProcess';
$tabkernel[553]='OpenProcessToken';
$tabkernel[554]='OpenSemaphoreA';
$tabkernel[555]='OpenSemaphoreW';
$tabkernel[556]='OpenThread';
$tabkernel[557]='OpenThreadToken';
$tabkernel[558]='OpenWaitableTimerA';
$tabkernel[559]='OpenWaitableTimerW';
$tabkernel[560]='OutputDebugStringA';
$tabkernel[561]='OutputDebugStringW';
$tabkernel[562]='PeekNamedPipe';
$tabkernel[563]='PostQueuedCompletionStatus';
$tabkernel[564]='PrepareTape';
$tabkernel[565]='PrivilegeCheck';
$tabkernel[566]='PrivilegedServiceAuditAlarmA';
$tabkernel[567]='PrivilegedServiceAuditAlarmW';
$tabkernel[568]='ProcessIdToSessionId';
$tabkernel[569]='PulseEvent';
$tabkernel[570]='PurgeComm';
$tabkernel[571]='QueryActCtxW';
$tabkernel[572]='QueryDosDeviceA';
$tabkernel[573]='QueryDosDeviceW';
$tabkernel[574]='QueryMemoryResourceNotification';
$tabkernel[575]='QueryPerformanceCounter';
$tabkernel[576]='QueryPerformanceFrequency';
$tabkernel[577]='QueueUserAPC';
$tabkernel[578]='QueueUserWorkItem';
$tabkernel[579]='RaiseException';
$tabkernel[580]='ReadDirectoryChangesW';
$tabkernel[581]='ReadEventLogA';
$tabkernel[582]='ReadEventLogW';
$tabkernel[583]='ReadFile';
$tabkernel[584]='ReadFileEx';
$tabkernel[585]='ReadFileScatter';
$tabkernel[586]='ReadProcessMemory';
$tabkernel[587]='RegisterEventSourceA';
$tabkernel[588]='RegisterEventSourceW';
$tabkernel[589]='RegisterWaitForSingleObject';
$tabkernel[590]='RegisterWaitForSingleObjectEx';
$tabkernel[591]='ReleaseActCtx';
$tabkernel[592]='ReleaseMutex';
$tabkernel[593]='ReleaseSemaphore';
$tabkernel[594]='RemoveDirectoryA';
$tabkernel[595]='RemoveDirectoryW';
$tabkernel[596]='RemoveVectoredExceptionHandler';
$tabkernel[597]='ReOpenFile';
$tabkernel[598]='ReplaceFileA';
$tabkernel[599]='ReplaceFileW';
$tabkernel[600]='ReportEventA';
$tabkernel[601]='ReportEventW';
$tabkernel[602]='ResetEvent';
$tabkernel[603]='ResetWriteWatch';
$tabkernel[604]='RestoreLastError';
$tabkernel[605]='ResumeThread';
$tabkernel[606]='RevertToSelf';
$tabkernel[607]='SearchPathA';
$tabkernel[608]='SearchPathW';
$tabkernel[609]='SetAclInformation';
$tabkernel[610]='SetCommBreak';
$tabkernel[611]='SetCommConfig';
$tabkernel[612]='SetCommMask';
$tabkernel[613]='SetCommState';
$tabkernel[614]='SetCommTimeouts';
$tabkernel[615]='SetComputerNameA';
$tabkernel[616]='SetComputerNameW';
$tabkernel[617]='SetComputerNameExA';
$tabkernel[618]='SetComputerNameExW';
$tabkernel[619]='SetCurrentDirectoryA';
$tabkernel[620]='SetCurrentDirectoryW';
$tabkernel[621]='SetDefaultCommConfigA';
$tabkernel[622]='SetDefaultCommConfigW';
$tabkernel[623]='SetDllDirectoryA';
$tabkernel[624]='SetDllDirectoryW';
$tabkernel[625]='SetEndOfFile';
$tabkernel[626]='SetEnvironmentVariableA';
$tabkernel[627]='SetEnvironmentVariableW';
$tabkernel[628]='SetErrorMode';
$tabkernel[629]='SetEvent';
$tabkernel[630]='SetFileApisToANSI';
$tabkernel[631]='SetFileApisToOEM';
$tabkernel[632]='SetFileAttributesA';
$tabkernel[633]='SetFileAttributesW';
$tabkernel[634]='SetFilePointer';
$tabkernel[635]='SetFilePointerEx';
$tabkernel[636]='SetFileSecurityA';
$tabkernel[637]='SetFileSecurityW';
$tabkernel[638]='SetFileShortNameA';
$tabkernel[639]='SetFileShortNameW';
$tabkernel[640]='SetFileTime';
$tabkernel[641]='SetFileValidData';
$tabkernel[642]='SetFirmwareEnvironmentVariableA';
$tabkernel[643]='SetFirmwareEnvironmentVariableW';
$tabkernel[644]='SetHandleCount';
$tabkernel[645]='SetHandleInformation';
$tabkernel[646]='SetKernelObjectSecurity';
$tabkernel[647]='SetLastError';
$tabkernel[648]='SetLastErrorEx';
$tabkernel[649]='SetLocalTime';
$tabkernel[650]='SetMailslotInfo';
$tabkernel[651]='SetNamedPipeHandleState';
$tabkernel[652]='SetPriorityClass';
$tabkernel[653]='SetPrivateObjectSecurity';
$tabkernel[654]='SetProcessAffinityMask';
$tabkernel[655]='SetProcessDEPPolicy';
$tabkernel[656]='SetProcessPriorityBoost';
$tabkernel[657]='SetProcessShutdownParameters';
$tabkernel[658]='SetProcessWorkingSetSize';
$tabkernel[659]='SetSecurityDescriptorControl';
$tabkernel[660]='SetSecurityDescriptorDacl';
$tabkernel[661]='SetSecurityDescriptorGroup';
$tabkernel[662]='SetSecurityDescriptorOwner';
$tabkernel[663]='SetSecurityDescriptorSacl';
$tabkernel[664]='SetStdHandle';
$tabkernel[665]='SetSystemPowerState';
$tabkernel[666]='SetSystemTime';
$tabkernel[667]='SetSystemTimeAdjustment';
$tabkernel[668]='SetTapeParameters';
$tabkernel[669]='SetTapePosition';
$tabkernel[670]='SetThreadAffinityMask';
$tabkernel[671]='SetThreadContext';
$tabkernel[672]='SetThreadExecutionState';
$tabkernel[673]='SetThreadIdealProcessor';
$tabkernel[674]='SetThreadPriority';
$tabkernel[675]='SetThreadPriorityBoost';
$tabkernel[676]='SetThreadToken';
$tabkernel[677]='SetTimeZoneInformation';
$tabkernel[678]='SetTokenInformation';
$tabkernel[679]='SetUnhandledExceptionFilter';
$tabkernel[680]='SetupComm';
$tabkernel[681]='SetVolumeLabelA';
$tabkernel[682]='SetVolumeLabelW';
$tabkernel[683]='SetVolumeMountPointA';
$tabkernel[684]='SetVolumeMountPointW';
$tabkernel[685]='SetWaitableTimer';
$tabkernel[686]='SignalObjectAndWait';
$tabkernel[687]='SizeofResource';
$tabkernel[688]='Sleep';
$tabkernel[689]='SleepEx';
$tabkernel[690]='SuspendThread';
$tabkernel[691]='SwitchToFiber';
$tabkernel[692]='SwitchToThread';
$tabkernel[693]='SystemTimeToFileTime';
$tabkernel[694]='TzSpecificLocalTimeToSystemTime';
$tabkernel[695]='SystemTimeToTzSpecificLocalTime';
$tabkernel[696]='TerminateProcess';
$tabkernel[697]='TerminateThread';
$tabkernel[698]='TlsAlloc';
$tabkernel[699]='TlsFree';
$tabkernel[700]='TlsGetValue';
$tabkernel[701]='TlsSetValue';
$tabkernel[702]='TransactNamedPipe';
$tabkernel[703]='TransmitCommChar';
$tabkernel[704]='TryEnterCriticalSection';
$tabkernel[705]='UnhandledExceptionFilter';
$tabkernel[706]='UnlockFile';
$tabkernel[707]='UnlockFileEx';
$tabkernel[708]='UnmapViewOfFile';
$tabkernel[709]='UnregisterWait';
$tabkernel[710]='UnregisterWaitEx';
$tabkernel[711]='UpdateResourceA';
$tabkernel[712]='UpdateResourceW';
$tabkernel[713]='VerifyVersionInfoA';
$tabkernel[714]='VerifyVersionInfoW';
$tabkernel[715]='VirtualAlloc';
$tabkernel[716]='VirtualAllocEx';
$tabkernel[717]='VirtualFree';
$tabkernel[718]='VirtualFreeEx';
$tabkernel[719]='VirtualLock';
$tabkernel[720]='VirtualProtect';
$tabkernel[721]='VirtualProtectEx';
$tabkernel[722]='VirtualQuery';
$tabkernel[723]='VirtualQueryEx';
$tabkernel[724]='VirtualUnlock';
$tabkernel[725]='WaitCommEvent';
$tabkernel[726]='WaitForDebugEvent';
$tabkernel[727]='WaitForMultipleObjects';
$tabkernel[728]='WaitForMultipleObjectsEx';
$tabkernel[729]='WaitForSingleObject';
$tabkernel[730]='WaitForSingleObjectEx';
$tabkernel[731]='WaitNamedPipeA';
$tabkernel[732]='WaitNamedPipeW';
$tabkernel[733]='WinLoadTrustProvider';
$tabkernel[734]='WriteFile';
$tabkernel[735]='WriteFileEx';
$tabkernel[736]='WriteFileGather';
$tabkernel[737]='WritePrivateProfileSectionA';
$tabkernel[738]='WritePrivateProfileSectionW';
$tabkernel[739]='WritePrivateProfileStringA';
$tabkernel[740]='WritePrivateProfileStringW';
$tabkernel[741]='WritePrivateProfileStructA';
$tabkernel[742]='WritePrivateProfileStructW';
$tabkernel[743]='WriteProcessMemory';
$tabkernel[744]='WriteProfileSectionA';
$tabkernel[745]='WriteProfileSectionW';
$tabkernel[746]='WriteProfileStringA';
$tabkernel[747]='WriteProfileStringW';
$tabkernel[748]='WriteTapemark';
$tabkernel[749]='ZombifyActCtx';
$tabkernel[750]='AllocateUserPhysicalPages';
$tabkernel[751]='FreeUserPhysicalPages';
$tabkernel[752]='MapUserPhysicalPages';
$tabkernel[753]='MapUserPhysicalPagesScatter';



?>